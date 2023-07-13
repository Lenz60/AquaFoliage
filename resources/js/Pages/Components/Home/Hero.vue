<template>
    <div data-themes="foliage">
        <div
            class="hero min-h-screen"
            style="background-image: url(/images/HeroCropped.jpg)"
        >
            <div class="hero-overlay bg-opacity-40 bg-base-200"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="flex-row justify-center items-center text-center">
                    <div>
                        <h1
                            id="hero-title"
                            class="mb-4 p-1 tracking-[-1%] text-6xl font-semibold font-montserrat text-primary overflow-hidden"
                        >
                            Explore the Diversity <br />
                            of Aquatic Flora
                        </h1>
                    </div>
                    <div class="flex text-center items-center justify-center">
                        <p
                            id="hero-desc"
                            class="mb-5 w-[600px] text-lg text-primary font-istok font-medium text-transparent overflow-hidden"
                        >
                            We provide information about aquatic plants needs.
                            <br />
                            Identify, care and create more efficient
                            environments for your aquascape
                        </p>
                    </div>
                    <Link
                        id="button"
                        href="docs"
                        class="btn m-5 btn-accent font-semibold font-montserrat"
                    >
                        Check it out
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import { gsap } from "gsap";
import { onMounted } from "vue";
import SplitType from "split-type";
import $ from "jquery";
export default {
    components: {
        Link,
    },
    setup() {
        onMounted(() => {
            let text1 = new SplitType("#hero-title");
            let text2 = $("#hero-desc").prop("id");
            console.log(text2);
            let characters = document.querySelectorAll(".char");
            $(text2).addClass("translate-y-full");

            for (var i = 0; i < characters.length; i++) {
                $(characters[i]).addClass("translate-y-full");
            }

            gsap.to("#hero-desc", {
                y: 0,
                x: 0,
                color: "#E8ECE9",
                stagger: 0.05,
                delay: 3,
                duration: 1,
            });

            gsap.to(".char", {
                y: 0,
                stagger: 0.05,
                delay: 1,
                duration: 0.5,
            });
            gsap.from("#button", {
                display: "none",
                overlay: 0,
                stagger: 0.05,
                delay: 4,
                duration: 5,
            });
        });
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
