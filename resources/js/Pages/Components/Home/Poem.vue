<template>
    <div data-themes="foliage">
        <div
            id="poemWrap"
            class="hero h-screen w-screen bg-opacity-60 masking"
            style="background-image: url(/images/cinematic2.png)"
        >
            <div class="hero-overlay bg-opacity-40"></div>
            <div
                class="flex flex-col md:w-[400px] md:h-[400px] justify-center items-center text-center lg:w-screen lg:h-screen"
            >
                <div class="hero-content items-center text-center">
                    <div class="indicator pb-5">
                        <!-- <span
                            id="quote"
                            class="indicator-item text-white font-catamaran indicator-start lg:text-[96px] md:text-[45px]"
                            >“</span
                        > -->
                        <div>
                            <div class="flex">
                                <span
                                    id="quote"
                                    class="font-catamaran indicator-item indicator-start text-white lg:text-[96px] md:text-[45px]"
                                    >“
                                </span>
                                <p
                                    id="poem1"
                                    class="font-montserrat text-primary indent-7 font-medium lg:text-[30px] overflow-hidden whitespace-nowrap md:text-[20px]"
                                >
                                    The beauty of nature is not just in the
                                    plants and animals themselves,
                                </p>
                            </div>
                            <div class="flex">
                                <p
                                    id="poem2"
                                    class="font-montserrat text-primary font-medium lg:text-[30px] overflow-hidden whitespace-nowrap md:text-[20px]"
                                >
                                    but also in the way they interact with each
                                    other and with their environment.
                                </p>
                                <span
                                    id="quote"
                                    class="font-catamaran indicator-end px-2 text-white lg:text-[96px] md:text-[45px] md:pt-4"
                                    >”</span
                                >
                            </div>
                        </div>
                        <!-- <span
                            id="quote"
                            class="indicator-item text-white font-catamaran indicator-bottom lg:text-[96px] md:text-[45px]"
                            >”</span
                        > -->
                    </div>
                </div>
                <div class="text-end">
                    <h1
                        id="takashi"
                        class="m-5 ml-5 font-montserrat font-semibold lg:text-[32px] text-white md:text-[20px] md:text-center md:m-[-70px]"
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
            //Incase of gsap not working properly
            if (typeof window !== "undefined") {
                gsap.registerPlugin(ScrollTrigger);
            }

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: "#poemWrap",
                },
            });

            tl.from("#poem1", {
                lazy: false,
                width: 0,
                ease: "none",
                stagger: 1,
                duration: 3,
            })
                .from("#poem2", {
                    lazy: false,
                    width: 0,
                    ease: "none",
                    stagger: 1,
                    duration: 3,
                })
                .from("#quote", {
                    lazy: false,
                    opacity: 0,
                })
                .from("#takashi", {
                    lazy: false,
                    opacity: 0,
                    stagger: 1,
                    duration: 2,
                });

            // gsap.timeline({})
            // gsap.from("#poem1", {
            //     lazy: false,
            //     scrollTrigger: "#poemWrap",
            //     width: 0,
            //     ease: "none",
            //     delay: 0.5,
            //     stagger: 1,
            //     duration: 3,
            // });
            // gsap.from("#poem2", {
            //     lazy: false,
            //     scrollTrigger: "#poemWrap",
            //     width: 0,
            //     delay: 3.5,
            //     ease: "none",
            //     stagger: 1,
            //     duration: 3,
            // });

            // gsap.from("#quote1", {
            //     lazy: false,
            //     scrollTrigger: "#poemWrap",
            //     delay: 6.5,
            //     opacity: 0,
            // });
            // gsap.from("#quote2", {
            //     lazy: false,
            //     scrollTrigger: "#poemWrap",
            //     delay: 6.5,
            //     opacity: 0,
            // });
            // gsap.from("#takashi", {
            //     lazy: false,
            //     scrollTrigger: "#poemWrap",
            //     delay: 7,
            //     opacity: 0,
            //     stagger: 1,
            //     duration: 2,
            // });
        });
        return {};
    },
};
</script>

<style scoped>
.masking {
    mask-image: linear-gradient(#10131000, #101310 20%);
}
</style>
