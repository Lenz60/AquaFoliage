<template>
    <div data-themes="foliage">
        <div
            id="poemWrap"
            class="hero h-screen w-full bg-opacity-60 masking"
            style="background-image: url(/images/cinematic2.png)"
        >
            <div class="hero-overlay bg-opacity-40"></div>
            <div
                class="flex flex-col w-[400px] h-[400px] justify-center items-center text-center lg:w-screen lg:h-screen xl:w-screen xl:h-screen"
            >
                <div
                    class="hero-content items-center text-center break-words overflow-hidden"
                >
                    <div class="indicator p-5 m-5">
                        <div class="">
                            <div class="flex w-fit h-fit">
                                <span
                                    id="quote"
                                    class="font-catamaran mt-5 indicator-item indicator-start ml-4 text-white lg:text-[96px] md:text-[45px]"
                                    >“
                                </span>
                                <p
                                    id="poem1"
                                    class="break-all font-montserrat text-primary indent-7 font-medium text-[10px] sm:text-[15px] lg:text-[30px] overflow-hidden whitespace-nowrap md:text-[20px]"
                                >
                                    The beauty of nature is not just in the
                                    plants and animals themselves,
                                </p>
                            </div>
                            <div class="flex w-fit h-fit">
                                <p
                                    id="poem2"
                                    class="break-words font-montserrat text-primary font-medium text-[10px] sm:text-[15px] lg:text-[30px] overflow-hidden whitespace-nowrap md:text-[20px]"
                                >
                                    but also in the way they interact with each
                                    other and with their environment.
                                </p>
                                <span
                                    id="quote"
                                    class="font-catamaran indicator-item indicator-bottom text-white lg:text-[96px] md:text-[45px]"
                                    >”</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <h1
                        id="takashi"
                        class="ml-5 font-montserrat font-semibold sm:text-[20px] lg:text-[32px] text-white md:text-[20px]"
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
