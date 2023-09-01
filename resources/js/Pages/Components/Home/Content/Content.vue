<template>
    <div
        class="flex-row min-w-full bg-transparent bg-no-repeat overflow-hidden p-5 bg-right-bottom min-h-full"
        style="background-image: url(/images/section2bgInvertedTransparent.png)"
    >
        <div
            class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-screen-2xl"
        >
            <div class="md:flex flex-row">
                <div
                    class="md:shrink-0 xl:w-[50%] items-center p-5 m-5 justify-center"
                >
                    <img
                        class="h-48 w-full object-cover md:h-full md:w-48 xl:w-full card rounded-md"
                        src="/images/section2/hairAlgae.jpg"
                        alt="Modern building architecture"
                    />
                </div>
                <div class="p-8">
                    <div
                        id="title1"
                        class="overflow-hidden font-montserrat xl:text-2xl md:text-xl sm:text-lg font-semibold drop-shadow-xl text-primary m-5 Title"
                    >
                        Find out the causes of the algae
                    </div>
                    <p
                        id="desc1"
                        class="justify-left relative overflow-hidden font-montserrat drop-shadow-xl text-primary m-5 rtlDesc"
                    >
                        The appearance of algae can be caused by many factor,
                        such as too much light, or too many nutrient in the
                        water. We will guide you to find a perfect way to make a
                        good tank environtment with minimal algae.
                    </p>
                </div>
            </div>
        </div>
        <div
            class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-screen-2xl"
        >
            <div class="flex md:flex-row sm:flex flex-col-reverse xl:flex-row">
                <div class="p-8">
                    <div
                        id="title2"
                        class="overflow-hidden font-montserrat xl:text-2xl md:text-xl sm:text-lg font-semibold drop-shadow-xl text-primary m-5 Title"
                    >
                        Nutrient Deficiency
                    </div>
                    <p
                        id="desc2"
                        class="justify-left relative overflow-hidden font-montserrat drop-shadow-xl text-primary m-5 rtlDesc"
                    >
                        Find the cause why your plant is dying. Melting, holes
                        in the leaves, and another reason why your plant is not
                        doing well in your tank can be caused by insufficient
                        amount of nutrition. Here we provide a information on
                        how much you should dose your fertilizer into your tank.
                    </p>
                </div>
                <div
                    class="md:shrink-0 xl:w-[50%] items-center p-5 m-5 justify-center"
                >
                    <img
                        id="img2"
                        class="h-48 w-full object-cover md:h-full md:w-48 xl:w-full card rounded-md"
                        src="/images/section2/javaFernMelting.jpg"
                        alt="Modern building architecture"
                    />
                </div>
            </div>
        </div>
        <div
            class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-screen-2xl"
        >
            <div class="md:flex flex-row">
                <div
                    class="md:shrink-0 xl:w-[50%] items-center p-5 m-5 justify-center"
                >
                    <img
                        id="img3"
                        class="h-48 w-full object-cover md:h-full md:w-48 xl:w-full card rounded-md"
                        src="/images/section2/pearling.jpg"
                        alt="Modern building architecture"
                    />
                </div>
                <div class="p-8">
                    <div
                        id="title3"
                        class="overflow-hidden font-montserrat xl:text-2xl md:text-xl sm:text-lg font-semibold drop-shadow-xl text-primary m-5 Title"
                    >
                        Plant Needs
                    </div>
                    <p
                        id="desc3"
                        class="justify-left relative overflow-hidden font-montserrat drop-shadow-xl text-primary m-5 rtlDesc"
                    >
                        Your plants need a specific amount of needs that should
                        be fulfilled to be able to thrive and grows beautiful.
                        We will help you to achive a beautiful looking tank with
                        healthy plants that you can enjoy with a cup of coffee
                        in the morning.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { onMounted } from "vue";
import $ from "jquery";
export default {
    setup() {
        onMounted(() => {
            gsap.registerPlugin(ScrollTrigger);

            const tl1 = gsap.timeline({
                scrollTrigger: {
                    trigger: "#desc1",
                    // markers: true,
                },
            });
            const tl2 = gsap.timeline({
                scrollTrigger: {
                    trigger: "#desc2",
                    // markers: true,
                },
            });
            const tl3 = gsap.timeline({
                scrollTrigger: {
                    trigger: "#desc3",
                    // markers: true,
                },
            });

            tl1.from("#title1", {
                color: "transparent",
                duration: 1,
                stagger: 0.05,
            })
                .from("#desc1", {
                    x: 100,
                    color: "transparent",
                    stagger: 0.05,
                    duration: 1,
                })
                .from("#img1", {
                    opacity: 0,
                    stagger: 0.05,
                    duration: 2,
                });
            tl2.from("#title2", {
                color: "transparent",
                duration: 1,
                stagger: 0.05,
            })
                .from("#desc2", {
                    x: -100,
                    color: "transparent",
                    stagger: 0.05,
                    duration: 1,
                })
                .from("#img2", {
                    opacity: 0,
                    stagger: 0.05,
                    duration: 2,
                });
            tl3.from("#title3", {
                color: "transparent",
                duration: 1,
                stagger: 0.05,
            })
                .from("#desc3", {
                    x: 100,
                    color: "transparent",
                    stagger: 0.05,
                    duration: 1,
                })
                .from("#img3", {
                    opacity: 0,
                    stagger: 0.05,
                    duration: 2,
                });
        });
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
