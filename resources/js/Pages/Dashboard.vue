<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout data-theme="foliage">
        <div class="flex flex-row w-full overflow-x-hidden">
            <div
                :class="{
                    'w-[10%]': showTime == true,
                    'w-[40%]': showTime == false,
                }"
            >
                <Menu
                    class=""
                    :Content="Content"
                    @SidebarShow="getSidebar($event)"
                    @DashboardDesc="getDesc($event)"
                ></Menu>
            </div>
            <div class="w-full">
                <h3
                    class="font-montserrat font-semibold text-xl p-5 hover:cursor-pointer"
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
        let showTime = ref(false);

        return { Content, SectionContent, showTime };
    },
    methods: {
        getDesc(data) {
            this.SectionContent = data;
        },
        getSidebar(data) {
            if (data === "showTime") {
                this.showTime = false;
            } else {
                this.showTime = true;
            }
        },
    },
};
</script>
