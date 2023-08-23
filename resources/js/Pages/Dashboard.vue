<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout data-theme="foliage">
        <div class="flex">
            <div class="w-[30%]">
                <Menu
                    :Content="Content"
                    @DashboardDesc="getDesc($event)"
                ></Menu>
            </div>
            <div class="w-[70%]">
                <h3
                    class="text-primary font-montserrat font-semibold text-xl p-5 hover:cursor-pointer"
                    @click="SectionContent = null"
                >
                    Favourites
                </h3>
                <Section
                    :sectionContent="SectionContent"
                    :favPlants="favPlants"
                    :favNutDefs="favNutDefs"
                    :favAlgaes="favAlgaes"
                ></Section>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import Menu from "./Components/Plants/Menu.vue";
import Section from "./Components/Dashboard/Section.vue";

export default {
    emits: ["DashboardDesc"],
    components: {
        Head,
        AuthenticatedLayout,
        Menu,
        Section,
    },
    props: ["favPlants", "favNutDefs", "favAlgaes"],
    setup(props) {
        const Content = ref("Dashboard");
        let SectionContent = ref("");

        return { Content, SectionContent };
    },
    methods: {
        getDesc(data) {
            this.SectionContent = data;
        },
    },
};
</script>
