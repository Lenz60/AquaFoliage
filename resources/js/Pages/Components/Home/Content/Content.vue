<template>
    <div
        class="flex-row min-w-full bg-[#101310] bg-no-repeat p-5 bg-right-bottom min-h-full"
        style="background-image: url(/images/section2bgInverted.png)"
    >
        <div class="flex justify-center items-center mx-5">
            <div class="flex justify-center items-center m-5 p-5">
                <div class="w-[50%] flex justify-center items-center p-5 m-5">
                    <img
                        id="img1"
                        src="/images/section2/hairAlgae.jpg"
                        alt=""
                        class="rounded-md drop-shadow-md card"
                    />
                </div>
                <div class="w-[50%] flex-row justify-center items-center m-5">
                    <h1
                        id="title1"
                        class="overflow-hidden font-montserrat text-2xl font-semibold drop-shadow-xl text-primary m-5"
                    >
                        Find out why algae appear in your tank
                    </h1>
                    <p
                        id="desc1"
                        class="justify-left relative overflow-hidden font-montserrat drop-shadow-xl text-primary m-5"
                    >
                        The appearance of algae can be caused by many factor,
                        such as too much light, or too many nutrient in the
                        water. We will guide you to find a perfect way to make a
                        good tank environtment with minimal algae.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-row items-center mx-5">
            <div class="flex justify-center items-center m-5 p-5">
                <div
                    class="w-[50%] flex-row justify-center items-center rt p-5 m-5"
                >
                    <h1
                        id="title2"
                        class="overflow-hidden font-montserrat text-2xl font-semibold drop-shadow-xl text-primary m-5"
                    >
                        Nutrient Deficiency
                    </h1>
                    <p
                        id="desc2"
                        class="justify-left relative font-montserrat drop-shadow-xl text-primary"
                    >
                        Find the cause why your plant is dying. Melting, holes
                        in the leaves, and another reason why your plant is not
                        doing well in your tank can be caused by insufficient
                        amount of nutrition. Here we provide a information on
                        how much you should dose your fertilizer into your tank.
                    </p>
                </div>
                <div class="w-[50%] flex justify-center items-center p-5 m-5">
                    <img
                        id="img2"
                        src="/images/section2/javaFernMelting.jpg"
                        alt=""
                        class="rounded-md drop-shadow-md card"
                    />
                </div>
            </div>
        </div>
        <div class="flex-row items-center mx-5">
            <div class="flex justify-center items-center m-5 p-5">
                <div class="w-[50%] flex justify-center items-center p-5 m-5">
                    <img
                        id="img3"
                        src="/images/section2/pearling.jpg"
                        alt=""
                        class="rounded-md drop-shadow-md card"
                    />
                </div>
                <div
                    class="w-[50%] flex-row justify-center items-center p-5 m-5"
                >
                    <h1
                        id="title3"
                        class="overflow-hidden font-montserrat text-2xl font-semibold drop-shadow-xl text-primary m-5"
                    >
                        Plant needs
                    </h1>
                    <p
                        id="desc3"
                        class="relative font-montserrat drop-shadow-xl text-primary"
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

            gsap.from("#title1", {
                scrollTrigger: "#title1",
                color: "transparent",
                stagger: 0.05,
                duration: 2,
            });
            gsap.from("#desc1", {
                scrollTrigger: "#desc1",
                x: 100,
                color: "transparent",
                stagger: 0.05,
                duration: 1,
            });
            gsap.from("#img1", {
                scrollTrigger: "#img1",
                opacity: 0,
                delay: 0.5,
                stagger: 0.05,
                duration: 2,
            });
            gsap.from("#title2", {
                scrollTrigger: "#title2",
                color: "transparent",
                stagger: 0.05,
                duration: 2,
            });
            gsap.from("#desc2", {
                scrollTrigger: "#desc2",
                x: -100,
                color: "transparent",
                stagger: 0.05,
                duration: 1,
            });
            gsap.from("#img2", {
                scrollTrigger: "#img2",
                opacity: 0,
                delay: 0.5,
                stagger: 0.05,
                duration: 2,
            });
            gsap.from("#title3", {
                scrollTrigger: "#title3",
                color: "transparent",
                stagger: 0.05,
                duration: 2,
            });
            gsap.from("#desc3", {
                scrollTrigger: "#desc3",
                x: 100,
                color: "transparent",
                stagger: 0.05,
                duration: 1,
            });
            gsap.from("#img3", {
                scrollTrigger: "#img3",
                opacity: 0,
                delay: 0.5,
                stagger: 0.05,
                duration: 2,
            });
        });
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
