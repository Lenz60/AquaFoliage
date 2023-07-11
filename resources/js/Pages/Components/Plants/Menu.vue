<template>
    <div>
        <div class="font-montserrat text-primary h-screen overflow-x-auto">
            <ul class="menu p-5 bg-neutral w-full h-max">
                <li>
                    <details open>
                        <summary class="text-lg">
                            <img
                                src="/icons/plantsico.png"
                                class="w-[42px] h-[25px]"
                            />
                            Plant Characteristics
                        </summary>
                        <ul>
                            <li v-for="plant in Plants">
                                <a>{{ plant.name }}</a>
                            </li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details open>
                        <summary class="text-lg">
                            <img
                                src="/icons/nutrientico.png"
                                class="w-[42px] h-[34.29px]"
                            />
                            Nutrient Deficiencies
                        </summary>
                        <ul>
                            <li><a>level 2 item 1</a></li>
                            <li><a>level 2 item 2</a></li>
                            <li><a>level 2 item 2</a></li>
                            <li><a>level 2 item 2</a></li>
                            <li><a>level 2 item 2</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details open>
                        <summary class="text-lg">
                            <img
                                src="/icons/algaeico.png"
                                class="w-[42px] h-[35.72px]"
                            />
                            Algae Characteristics
                        </summary>
                        <ul>
                            <li><a>level 2 item 1</a></li>
                            <li><a>level 2 item 2</a></li>
                            <li><a>level 2 item 2</a></li>
                            <li><a>level 2 item 2</a></li>
                            <li><a>level 2 item 2</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    props: ["Plants"],
    components: {
        Link,
    },
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
