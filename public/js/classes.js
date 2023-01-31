class Sprite {
    constructor({ position, imageSrc, scale = 1, frameMax = 1, offset = { x: 0, y: 0 } }) {
        this.position = position
        this.width = 50
        this.height = 150
        this.image = new Image()
        this.image.src = imageSrc
        this.scale = scale
        this.frameMax = frameMax
        this.framesCurrent = 0
        this.frameElapsed = 0
        this.frameHold = 5
        this.offset = offset
    }

    draw() {
        c.drawImage(
            this.image,
            this.framesCurrent * (this.image.width / this.frameMax),
            0,
            this.image.width / this.frameMax,
            this.image.height,
            this.position.x - this.offset.x,
            this.position.y - this.offset.y,
            this.image.width / this.frameMax * this.scale,
            this.image.height * this.scale
        )
    }

    animateFrame() {
        this.frameElapsed++
        if (this.frameElapsed % this.frameHold === 0) {

            if (this.framesCurrent < this.frameMax - 1) {
                this.framesCurrent++
            } else {
                this.framesCurrent = 0
            }

        }
    }

    update() {
        this.draw()
        this.animateFrame()
    }

}

class Fighter extends Sprite {
    constructor({
        position,
        velocity,
        color = 'red',
        imageSrc,
        scale = 1,
        frameMax = 1,
        offset = { x: 0, y: 0 },
        sprites
    }) {
        super({
            position,
            imageSrc,
            scale,
            frameMax,
            offset
        })
        this.velocity = velocity
        this.width = 50
        this.height = 150
        this.lastkey
        this.attackBox = {
            position: {
                x: this.position.x,
                y: this.position.y
            },
            offset,
            width: 100,
            height: 50
        }
        this.color = color
        this.isAttacking
        this.health = 100
        this.framesCurrent = 0
        this.frameElapsed = 0
        this.frameHold = 5,
            this.sprites = sprites

        for (const sprite in this.sprites) {
            sprites[sprite].image = new Image()
            sprites[sprite].image.src = sprites[sprite].imageSrc
        }
        console.log(this.sprites)
    }


    update() {
        this.draw()

        this.animateFrame()

        this.attackBox.position.x = this.position.x + this.attackBox.offset.x
        this.attackBox.position.y = this.position.y

        this.position.x += this.velocity.x
        this.position.y += this.velocity.y

        if (this.position.y + this.height + this.velocity.y >= canvas.height - 80) {
            this.velocity.y = 0
        } else this.velocity.y += gravity
    }

    attack() {
        this.switchSprite('attack1')
        this.isAttacking = true
        setTimeout(() => {
            this.isAttacking = false
        }, 100);
    }

    switchSprite(sprite) {
        if (this.image === this.sprites.attack1.image &&
            this.framesCurrent < this.sprites.attack1.frameMax - 1)
            return
        switch (sprite) {
            case 'idle':
                if (this.image !== this.sprites.idle.image) {
                    this.frameMax = this.sprites.idle.frameMax
                    this.image = this.sprites.idle.image
                    this.frameCurrent = 0
                }
                break
            case 'run':
                if (this.image !== this.sprites.run.image) {
                    this.image = this.sprites.run.image
                    this.frameMax = this.sprites.run.frameMax
                    this.frameCurrent = 0
                }
                break
            case 'attack1':
                if (this.image !== this.sprites.attack1.image) {
                    this.image = this.sprites.attack1.image
                    this.frameMax = this.sprites.attack1.frameMax
                    this.frameCurrent = 0
                }
        }
    }

}