<template>
    <div
        class="flex-row max-w-fit bg-[#101310] bg-no-repeat bg-left-bottom min-h-screen relative border-2 border-red-600"
        style="background-image: url(/images/section2bg.png)"
    >
        <div
            class="flex justify-center items-center border-2 border-green-400 m-5"
        >
            <div
                class="flex justify-center items-center m-5 p-5 border-2 border-blue-500"
            >
                <div
                    class="w-[50%] flex justify-center items-center border-2 p-5 m-5 border-yellow-400"
                >
                    <img
                        id="img1"
                        src="https://preview.redd.it/the-sacabambaspis-an-extinct-genus-of-jawless-fish-v0-mn6hrm3yk5sa1.jpg?auto=webp&s=fff00db26e0b861d1a4beff64ae3398a11aa68a1"
                        alt=""
                        class="rounded-md drop-shadow-2xl card w-[300px] h-[300px]"
                    />
                </div>
                <div
                    class="w-[50%] flex justify-center items-center border-2 p-5 m-5 border-yellow-400"
                >
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
        <div class="flex-row items-center border-2 border-green-400 m-5">
            <div
                class="flex justify-center items-center m-5 p-5 border-2 border-blue-500"
            >
                <div
                    class="w-[50%] flex justify-center items-center rt border-2 p-5 m-5 border-yellow-400"
                >
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
                <div
                    class="w-[50%] flex justify-center items-center border-2 p-5 m-5 border-yellow-400"
                >
                    <img
                        id="img2"
                        src="https://preview.redd.it/the-sacabambaspis-an-extinct-genus-of-jawless-fish-v0-mn6hrm3yk5sa1.jpg?auto=webp&s=fff00db26e0b861d1a4beff64ae3398a11aa68a1"
                        alt=""
                        class="rounded-md drop-shadow-2xl card w-[300px] h-[300px]"
                    />
                </div>
            </div>
        </div>
        <div class="flex-row items-center border-2 border-green-400 m-5">
            <div
                class="flex justify-center items-center m-5 p-5 border-2 border-blue-500"
            >
                <div
                    class="w-[50%] flex justify-center items-center border-2 p-5 m-5 border-yellow-400"
                >
                    <img
                        id="img3"
                        src="https://preview.redd.it/the-sacabambaspis-an-extinct-genus-of-jawless-fish-v0-mn6hrm3yk5sa1.jpg?auto=webp&s=fff00db26e0b861d1a4beff64ae3398a11aa68a1"
                        alt=""
                        class="rounded-md drop-shadow-2xl card w-[300px] h-[300px]"
                    />
                </div>
                <div
                    class="w-[50%] flex justify-center items-center border-2 p-5 m-5 border-yellow-400"
                >
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
                delay: 1,
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
                delay: 1,
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
                delay: 1,
                stagger: 0.05,
                duration: 2,
            });
        });
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
