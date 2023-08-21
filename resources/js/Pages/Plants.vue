<template>
    <Head title="Plants Databases"> </Head>
    <div class="relative bg-neutral overflow-x-hidden no-scrollbar">
        <Navbar class="sticky top-0 z-50"></Navbar>
        <div class="flex h-screen w-screen">
            <div v-if="content == '404'">
                <div
                    class="flex flex-col justify-center items-center h-screen w-screen"
                >
                    <div class="items-center justify-center text-center">
                        <h1
                            class="text-[200px] font-montserrat text-center text-primary"
                        >
                            404
                        </h1>
                        <h2
                            class="text-[40px] font-montserrat text-primary pb-5"
                        >
                            Not Found
                        </h2>
                    </div>
                    <div class="items-center justify-content-center">
                        <h3
                            class="text-[20px] font-montserrat text-center text-primary"
                        >
                            The page you requested is not found
                        </h3>
                    </div>
                </div>
            </div>
            <div v-else>
                <div class="flex">
                    <div class="w-[30%] h-screen">
                        <Menu
                            :Plants="plants"
                            :Algaes="algae"
                            :NutDefs="nutrientDef"
                        ></Menu>
                    </div>
                    <div class="w-[70%] h-screen">
                        <Section></Section>
                    </div>
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
import { Head } from "@inertiajs/vue3";
export default {
    props: {
        plants: Object,
        algae: Object,
        nutrientDef: Object,
        content: String,
    },
    components: {
        Head,
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
