<template>
    <div class="relative bg-neutral overflow-x-hidden no-scrollbar">
        <Navbar class="sticky top-0 z-50"></Navbar>
        <div class="flex h-screen w-screen">
            <div class="w-[30%] h-screen">
                <Menu
                    :Plants="plants"
                    :Algaes="algae"
                    :NutDefs="nutrientDef"
                ></Menu>
                <!-- <div>
                    <div
                        class="font-montserrat text-primary h-screen overflow-y-auto pb-10 no-scrollbar"
                    >
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
                                        <li v-for="plant in plants">
                                            <Link @click="getPlant(plant.id)"
                                                ><a>{{ plant.name }}</a></Link
                                            >
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
                                        <li v-for="nutdef in nutrientDef">
                                            <a>{{ nutdef.name }}</a>
                                        </li>
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
                                        <li v-for="algae in algae">
                                            <a>{{ algae.name }}</a>
                                        </li>
                                    </ul>
                                </details>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <div class="w-[70%] h-screen">
                <div v-if="show">
                    <!-- <p></p> -->
                    <!-- <Detail></Detail> -->
                </div>
                <div v-else>
                    <Section></Section>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "./Components/Home/Navbar.vue";
import Menu from "./Components/Plants/Menu.vue";
import Section from "./Components/Plants/Section.vue";
import { VueElement, ref } from "vue";
export default {
    props: {
        plants: Object,
        algae: Object,
        nutrientDef: Object,
    },
    components: {
        Navbar,
        Menu,
        Section,
    },
    setup() {
        const show = ref(false);
        const id = ref("");
        return { show, id };
    },
    methods: {
        // getPlant(id) {
        //     this.id = id;
        //     console.log(this.id);
        //     this.show = true;
        //     axios.post("/detail", { id: this.id });
        // },
    },
};
</script>

<style scoped>
/* Hide scrollbar for Chrome, Safari and Opera */
.no-scrollbar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.no-scrollbar {
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
}
</style>
