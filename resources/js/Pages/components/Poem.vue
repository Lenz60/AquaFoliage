<template>
    <div data-themes="foliage">
        <div
            id="poemWrap"
            class="hero min-h-screen bg-opacity-60 absolute bg-base-200"
            style="background-image: url(/images/cinematic2.png)"
        >
            <div class="hero-overlay bg-opacity-40 bg-base-200"></div>
            <div class="flex-row">
                <div class="hero-content items-center text-center">
                    <div class="indicator pb-5">
                        <span
                            id="quote1"
                            class="indicator-item text-white font-catamaran indicator-start text-[96px]"
                            >“</span
                        >
                        <div>
                            <p
                                id="poem1"
                                class="font-montserrat indent-7 text-primary font-medium text-[30px] overflow-hidden whitespace-nowrap"
                            >
                                The beauty of nature is not just in the plants
                                and animals themselves,
                            </p>
                            <p
                                id="poem2"
                                class="font-montserrat text-primary font-medium text-[30px] overflow-hidden whitespace-nowrap"
                            >
                                but also in the way they interact with each
                                other and with their environment.
                            </p>
                        </div>
                        <span
                            id="quote2"
                            class="indicator-item pl-[60px] pt-[60px] text-white font-catamaran indicator-bottom text-[96px]"
                            >”</span
                        >
                    </div>
                </div>
                <div class="text-end">
                    <h1
                        id="takashi"
                        class="m-5 ml-5 font-montserrat font-semibold text-[32px] text-white"
                    >
                        - Takashi Amano
                    </h1>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import $ from "jquery";
import { onMounted } from "vue";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
export default {
    setup() {
        onMounted(() => {
            gsap.registerPlugin(ScrollTrigger);

            // gsap.timeline({})
            gsap.from("#poem1", {
                scrollTrigger: "#poemWrap",
                width: 0,
                ease: "none",
                delay: 0.5,
                stagger: 1,
                duration: 3,
            });
            gsap.from("#poem2", {
                scrollTrigger: "#poemWrap",
                width: 0,
                delay: 3.5,
                ease: "none",
                stagger: 1,
                duration: 3,
            });

            gsap.from("#quote1", {
                scrollTrigger: "#poemWrap",
                delay: 6.5,
                opacity: 0,
            });
            gsap.from("#quote2", {
                scrollTrigger: "#poemWrap",
                delay: 6.5,
                opacity: 0,
            });
            gsap.from("#takashi", {
                scrollTrigger: "#poemWrap",
                delay: 7,
                opacity: 0,
                stagger: 1,
                duration: 2,
            });
        });
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
