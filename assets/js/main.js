const canvas = document.getElementById('bg-canvas');

if(canvas){

    const ctx = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const particles = [];

    const particleCount = 80;

    class Particle{

        constructor(){

            this.x = Math.random() * canvas.width;

            this.y = Math.random() * canvas.height;

            this.size = Math.random() * 2 + 1;

            this.speedX = (Math.random() - 0.5) * 0.5;

            this.speedY = (Math.random() - 0.5) * 0.5;

        }

        update(){

            this.x += this.speedX;

            this.y += this.speedY;

            if(this.x > canvas.width) this.x = 0;

            if(this.x < 0) this.x = canvas.width;

            if(this.y > canvas.height) this.y = 0;

            if(this.y < 0) this.y = canvas.height;

        }

        draw(){

            ctx.beginPath();

            ctx.arc(
                this.x,
                this.y,
                this.size,
                0,
                Math.PI * 2
            );

            ctx.fillStyle =
                'rgba(88,166,255,0.7)';

            ctx.fill();

        }

    }

    for(let i = 0; i < particleCount; i++){

        particles.push(new Particle());

    }

    function animate(){

        ctx.clearRect(
            0,
            0,
            canvas.width,
            canvas.height
        );

        particles.forEach(particle => {

            particle.update();

            particle.draw();

        });

        connectParticles();

        requestAnimationFrame(animate);

    }

    function connectParticles(){

        for(let a = 0; a < particles.length; a++){

            for(let b = a; b < particles.length; b++){

                const dx =
                    particles[a].x -
                    particles[b].x;

                const dy =
                    particles[a].y -
                    particles[b].y;

                const distance =
                    dx * dx + dy * dy;

                if(distance < 12000){

                    ctx.beginPath();

                    ctx.strokeStyle =
                        'rgba(88,166,255,0.08)';

                    ctx.lineWidth = 1;

                    ctx.moveTo(
                        particles[a].x,
                        particles[a].y
                    );

                    ctx.lineTo(
                        particles[b].x,
                        particles[b].y
                    );

                    ctx.stroke();

                }

            }

        }

    }

    animate();

    window.addEventListener('resize', () => {

        canvas.width = window.innerWidth;

        canvas.height = window.innerHeight;

    });

}
function fadeIn(){

    fades.forEach(fade => {

        const position =
            fade.getBoundingClientRect().top;

        if(position < window.innerHeight - 100){

            fade.classList.add('show');

        }

    });

}

fadeIn();

window.addEventListener('scroll', fadeIn);