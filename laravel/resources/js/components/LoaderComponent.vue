<template>
    <div>

        <div class="center-on-page">

            <div class="container-pb">
                <div class="pokeball" id="p1">
                    <div class="pokeball__button"></div>
                </div>
                <div class="shadow" id="s-1"></div>
            </div>
            <div class="container-pb">
                <div class="pokeball" id="p2">
                    <div class="pokeball__button"></div>
                </div>
                <div class="shadow" id="s-2"></div>
            </div>
            <div class="container-pb">
                <div class="pokeball" id="p3">
                    <div class="pokeball__button"></div>
                </div>
                <div class="shadow" id="s-3"></div>
            </div>

        </div>
    </div>

</template>

<script>
export default {

}
</script>

<style scoped>
*,
*:before,
*:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.center-on-page {
    display: flex;
    justify-content: center;
    transform: scale(0.4);
}

.container-pb:first-child {
    margin: 0 0 0 auto;
}

.container-pb:last-child {
    margin: 0 auto 0 0;
}

/* Poké Styles */
.pokeball {
    margin: 0 10px;
    position: relative;
    width: 200px;
    height: 200px;
    background: #fff;
    border: 10px solid #000;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: inset -10px 10px 0 10px #ccc;

}

.pokeball::before,
.pokeball::after {
    content: "";
    position: absolute;
}

.pokeball::before {
    background: red;
    width: 100%;
    height: 50%;
}

.pokeball::after {
    top: calc(50% - 10px);
    width: 100%;
    height: 20px;
    background: #000;
}

.pokeball__button {
    position: absolute;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    width: 60px;
    height: 60px;
    background: #7f8c8d;
    border: 10px solid #fff;
    border-radius: 50%;
    z-index: 10;
    box-shadow: 0 0 0 10px black;
}

#p1 {
    animation: fall 1s ease-in-out infinite;
}

#p2 {
    animation: fall 1s ease-in-out infinite;
    animation-delay: 0.2s;
}

#p3 {
    animation: fall 1s ease-in-out infinite;

    animation-delay: 0.4s;
}

.shadow {
    margin: 5px auto;
    width: 170px;
    height: 50px;
    border-radius: 50%;
    background-color: rgba(128, 128, 128, 0.39);

}

#s-1 {
    animation: shadow-size 1s ease-in-out infinite;
}

#s-2 {
    animation: shadow-size 1s ease-in-out infinite;
    animation-delay: 0.2s;
}

#s-3 {
    animation: shadow-size 1s ease-in-out infinite;
    animation-delay: 0.4s;
}

/* Animation */


@keyframes fall {
    0% {
        top: -50px;
    }

    50% {
        top: 0;
    }

    100% {
        top: -50px;
    }
}

@keyframes shadow-size {
    0% {
        width: 140px
    }

    50% {
        width: 170px
    }

    100% {
        width: 140px;
    }
}
</style>