const canvas = document.querySelector('canvas')

const c = canvas.getContext('2d')

canvas.width = 1024
canvas.height = 576

c.fillRect(0, 0, canvas.width, canvas.height)

const gravity = 0.7

const background = new Sprite({
    position: {
        x: 0,
        y: 0
    },
    imageSrc: 'img/sprite/background1.png'
})

const shop = new Sprite({
    position: {
        x: 600,
        y: 176
    },
    imageSrc: 'img/sprite/shop.png',
    scale: 2.5,
    frameMax: 6
})

const player = new Fighter({
    position: {
        x: 0,
        y: 0
    },
    velocity: {
        x: 0,
        y: 0
    },
    imageSrc: 'img/sprite/idle.png',
    frameMax: 16,
    scale: 0.75,
    offset: {
        x: 40,
        y: 15
    },
    sprites: {
        idle: {
            imageSrc: 'img/sprite/idle.png',
            frameMax: 16
        },
        run: {
            imageSrc: 'img/sprite/run.png',
            frameMax: 16
        },
        attack1: {
            imageSrc: 'img/sprite/middlekick.png',
            frameMax: 12
        }
    }
})

player.draw()


const enemy = new Fighter({
    position: {
        x: 400,
        y: 100
    },
    velocity: {
        x: 0,
        y: 0
    },
    color: 'blue',
    offset: {
        x: -50,
        y: 0
    },
    sprites: {
        idle: {
            imageSrc: 'img/sprite/idle.png',
            frameMax: 16
        },
        run: {
            imageSrc: 'img/sprite/run.png',
            frameMax: 16
        },
        attack1: {
            imageSrc: 'img/sprite/middlekick.png',
            frameMax: 12
        }
    }
})


console.log(player)

const keys = {
    a: {
        pressed: false
    },
    d: {
        pressed: false
    },
    ArrowRight: {
        pressed: false
    },
    ArrowLeft: {
        pressed: false
    }
}




decreaseTimer()

function animate() {
    window.requestAnimationFrame(animate)
    c.fillStyle = 'black'
    c.fillRect(0, 0, canvas.width, canvas.height)
    background.update()
    //shop.update()
    player.update()
    //enemy.update()


    player.velocity.x = 0
    enemy.velocity.x = 0
    //mouvement joueur 1
    player.switchSprite('idle')
    if (keys.a.pressed && player.lastkey === 'a') {
        player.velocity.x = -5
        player.switchSprite('run')
    } else if (keys.d.pressed && player.lastkey === 'd') {
        player.velocity.x = 5
        player.switchSprite('run')
    }

    if (player.velocity.y<0) {
        player.switchSprite('jump')
    }

    //mouvement joueur 2
    if (keys.ArrowLeft.pressed && enemy.lastkey === 'ArrowLeft') {
        enemy.velocity.x = -5
    } else if (keys.ArrowRight.pressed && enemy.lastkey == 'ArrowRight') {
        enemy.velocity.x = 5
    }

    //detecter la collision joueur 1
    if (rectangularCollision({
        rectangle1: player,
        rectangle2: enemy
    }) && player.isAttacking) {
        player.isAttacking = false
        enemy.health -= 20
        document.querySelector('#enemyHealth').style.width = enemy.health + '%'
    }
    //detecter la collision joueur 2
    if (rectangularCollision({
        rectangle1: enemy,
        rectangle2: player
    }) && enemy.isAttacking) {
        enemy.isAttacking = false
        player.health -= 20
        document.querySelector('#playerHealth').style.width = player.health + '%'
    }

    //fin du jeu par rapport à la vie
    if (enemy.health <= 0 || player.health <= 0) {
        determineWinner({ player, enemy, timerId })
    }
}

animate()


window.addEventListener('keydown', (event) => {
    //mouvement reset joueur 1
    switch (event.key) {
        case 'd':
            keys.d.pressed = true
            player.lastkey = 'd'
            break;
        case 'a':
            keys.a.pressed = true
            player.lastkey = 'a'
            break;
        case 'z':
            player.velocity.y = -20
            break;
        case ' ':
            player.attack()
            break;
        //mouvement reset joueur 2
        case 'ArrowRight':
            keys.ArrowRight.pressed = true
            enemy.lastkey = 'ArrowRight'
            break;
        case 'ArrowLeft':
            keys.ArrowLeft.pressed = true
            enemy.lastkey = 'ArrowLeft'
            break;
        case 'ArrowUp':
            enemy.velocity.y = -20
            break;
        case 'ArrowDown':
            enemy.isAttacking = true
            break;

    }
})

//ecoute les touches du clavier en boucle
window.addEventListener('keyup', (event) => {
    switch (event.key) {
        case 'd':
            keys.d.pressed = false
            break;
        case 'a':
            keys.a.pressed = false
            break;
    }
    switch (event.key) {
        case 'ArrowRight':
            keys.ArrowRight.pressed = false
            break;
        case 'ArrowLeft':
            keys.ArrowLeft.pressed = false
            break;
    }
})