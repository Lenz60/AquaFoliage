<template>
    <Transition name="fadeout">
        <div id="#loading" class="loader flex items-center justify-center">
            <div
                class="flex flex-col items-center text-center justify-center w-screen h-screen"
            >
                <div class="banana e">
                    <svg
                        class="logo"
                        width="42px"
                        height="27px"
                        viewBox="0 0 42 27"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                        <path
                            d="M27.2861584,12.161723 C21.878637,13.1079515 17.6922039,20.3685835 15.4747077,25.1841521 C13.3245071,4.20375459 42,0 42,0 C42,0 37.9221081,28.5085611 15.7102421,26.9373612 L27.2861584,12.161723 Z M9.68859135,25.3642259 L4.07597867,14.6643189 C3.16588397,18.4076368 6.95830724,23.2066496 9.14123129,25.5907604 C-4.2897248,21.7286768 1.04594976,3.21222934 1.04594976,3.21222934 C1.04594976,3.21222934 15.98106,12.9521138 9.68859135,25.3642259 Z"
                            id=""
                            fill="#00ba69"
                        ></path>
                    </svg>
                </div>
                <div class="wrapper">
                    <div class="loading-text">
                        <h1 class="font-montserrat font-semibold">
                            Loading
                            <span class="dot-one"> .</span>
                            <span class="dot-two"> .</span>
                            <span class="dot-three"> .</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </Transition>
</template>

<script>
import { gsap } from "gsap";
import { onMounted } from "vue";
export default {
    name: "LoadingScreen",
    props: ["isLoading"],
    setup() {
        onMounted(() => {
            const tl = gsap
                .timeline({
                    defaults: { duration: 2 },
                })
                .to("#loading", { opacity: 0 });
            tl.restart();
        });
        return {};
    },
};
</script>

<style scoped>
body {
    padding: 150px 100px;
}

*,
*:before,
*:after {
    box-sizing: border-box;
}

.logo {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.logo-cont {
    padding: 30px;
    width: 100px;
    height: 100px;
    position: relative;
    border-radius: 50%;
    background: #00ba69;
    float: left;
    margin: 50px 100px;
}

.logo-cont::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    border-radius: 50%;
    border: solid 2px #00ba69;
    top: 0;
    left: 0;
    background: #00ba69;
    animation: grow 1s 1.5s infinite ease-out;
}

.logo-cont::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -2;
    border-radius: 50%;
    border: solid 2px #00ba69;
    top: 0;
    left: 0;
    animation: grow 1s 0.8s infinite ease-out;
}

.logo {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.banana {
    padding: 30px;
    width: 100px;
    height: 100px;
    position: relative;
    border-radius: 50%;
    background: #e8ece9;
    float: left;
    margin: 50px 100px;
}

.banana::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    border-radius: 50%;
    border: solid 2px #00ba69;
    top: 0;
    left: 0;
    animation: grow 1s infinite ease-in-out;
}

.banana::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -2;
    border-radius: 50%;
    border: solid 2px #00ba69;
    top: 0;
    left: 0;
    animation: grow 1s 0.5s infinite ease-in-out;
}

@keyframes grow {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    100% {
        transform: scale(1.5);
        opacity: 0;
    }
}

.e::before {
    background: #00ba69;
    animation: grow 1s infinite ease-out;
}
.e::after {
    animation: grow 1s 0.5s infinite ease-out;
}

@keyframes spinning {
    0% {
        transform: scale(1) rotate(0deg);
    }
    100% {
        transform: scale(1) rotate(360deg);
    }
}
.loader {
    background-color: #0b1c11;
    bottom: 0;
    color: #e8ece9;
    display: block;
    font-size: 32px;
    left: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    text-align: center;
    top: 0;
}

.fadeout {
    animation: fadeout 1s forwards;
}
@keyframes fadeout {
    to {
        opacity: 0;
        visibility: hidden;
    }
}

span[class^="dot-"] {
    opacity: 0;
}
.dot-one {
    animation: dot-one 2s infinite linear;
}
.dot-two {
    animation: dot-two 2s infinite linear;
}
.dot-three {
    animation: dot-three 2s infinite linear;
}
@keyframes dot-one {
    0% {
        opacity: 0;
    }
    15% {
        opacity: 0;
    }
    25% {
        opacity: 1;
    }
    100% {
        opacity: 1;
    }
}

@keyframes dot-two {
    0% {
        opacity: 0;
    }
    25% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        opacity: 1;
    }
}

@keyframes dot-three {
    0% {
        opacity: 0;
    }
    50% {
        opacity: 0;
    }
    75% {
        opacity: 1;
    }
    100% {
        opacity: 1;
    }
}
</style>
