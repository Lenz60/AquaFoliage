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
                        class="rounded-md drop-shadow-2xl card"
                    />
                </div>
                <div
                    class="w-[50%] flex-row justify-center items-center p-5 m-5"
                >
                    <h1
                        id="title1"
                        class="overflow-hidden font-montserrat text-2xl font-semibold drop-shadow-xl text-primary m-5"
                    >
                        Find out why algae appear in your tank
                    </h1>
                    <p
                        id="desc1"
                        class="indent-8 relative overflow-hidden font-montserrat drop-shadow-xl text-primary"
                    >
                        On the other hand the innovational path that we have
                        chosen allows to appreciate the value of the tasks given
                        by the society and government. The significance of such
                        problems is so obvious that new model of the
                        organisational activity requires the analysis of the
                        step-by-step consistent development of the society. It
                        should be noted that the implementation of the planned
                        tasks plays an important part in the formation of the
                        step-by-step consistent development of the society.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-row items-center mx-5">
            <div class="flex justify-center items-center mx-5 p-5">
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
                        class="indent-8 relative font-montserrat drop-shadow-xl text-primary"
                    >
                        The significance of such problems is so obvious that the
                        implementation of the planned tasks contributes to the
                        preparing and implementation of further ways of
                        development. There's no doubt that the innovational path
                        that we have chosen requires the analysis of existing
                        financial and administrative conditions. The
                        significance of such problems is so obvious that the
                        understanding of nature of resource saving technologies
                        directly depends on strengthening the democratic system.
                    </p>
                </div>
                <div class="w-[50%] flex justify-center items-center p-5 m-5">
                    <img
                        id="img2"
                        src="/images/section2/javaFernMelting.jpg"
                        alt=""
                        class="rounded-md drop-shadow-2xl card"
                    />
                </div>
            </div>
        </div>
        <div class="flex-row items-center mx-5">
            <div class="flex justify-center items-center mx-5 p-5">
                <div class="w-[50%] flex justify-center items-center p-5 m-5">
                    <img
                        id="img3"
                        src="/images/section2/pearling.jpg"
                        alt=""
                        class="rounded-md drop-shadow-2xl card"
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
                        class="indent-8 relative font-montserrat drop-shadow-xl text-primary"
                    >
                        However, one should not forget constant quantitive
                        growth and the scope of our activity requires the
                        clarification of the tasks given by the society and
                        government. Thus the innovational path that we have
                        chosen contributes to increasing the quality of new
                        propositions. The significance of such problems is so
                        obvious that the innovational path that we have chosen
                        allows to complete important implementation tasks of the
                        system of mass participation.
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
