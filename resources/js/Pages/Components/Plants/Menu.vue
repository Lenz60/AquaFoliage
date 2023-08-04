<template>
    <div
        class="card shadow-xl rounded-sm bg-neutral-focus bg-blend-color-dodge"
    >
        <div
            class="font-montserrat text-primary h-screen overflow-x-auto no-scrollbar pb-10"
        >
            <ul class="menu p-5 w-full h-max">
                <div v-if="Content == 'plants'">
                    <PlantsMenu Class="show" :Plants="Plants"></PlantsMenu>
                    <NutDefMenu Class="hide" :NutDefs="NutDefs"></NutDefMenu>
                    <AlgaeMenu Class="hide" :Algaes="Algaes"></AlgaeMenu>
                </div>
                <div v-else-if="Content == 'nutDef'">
                    <PlantsMenu Class="hide" :Plants="Plants"></PlantsMenu>
                    <NutDefMenu Class="show" :NutDefs="NutDefs"></NutDefMenu>
                    <AlgaeMenu Class="hide" :Algaes="Algaes"></AlgaeMenu>
                </div>
                <div v-else-if="Content == 'algae'">
                    <PlantsMenu Class="hide" :Plants="Plants"></PlantsMenu>
                    <NutDefMenu Class="hide" :NutDefs="NutDefs"></NutDefMenu>
                    <AlgaeMenu Class="show" :Algaes="Algaes"></AlgaeMenu>
                </div>
                <div v-else-if="Content == 'Dashboard'">
                    <h3 class="text-xl p-5">Dashboard Menu</h3>
                    <DashboardMenu
                        @DashboardDesc="getDesc($event)"
                    ></DashboardMenu>
                </div>
                <div v-else>
                    <PlantsMenu Class="hide" :Plants="Plants"></PlantsMenu>
                    <NutDefMenu Class="hide" :NutDefs="NutDefs"></NutDefMenu>
                    <AlgaeMenu Class="hide" :Algaes="Algaes"></AlgaeMenu>
                </div>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import PlantsMenu from "./Submenu/PlantsMenu.vue";
import NutDefMenu from "./Submenu/NutDefMenu.vue";
import AlgaeMenu from "./Submenu/AlgaeMenu.vue";
import DashboardMenu from "./Submenu/DashboardMenu.vue";

export default {
    props: ["Content", "Plants", "Algaes", "NutDefs"],
    components: {
        PlantsMenu,
        NutDefMenu,
        AlgaeMenu,
        DashboardMenu,
        Link,
    },
    setup() {
        return {};
    },
    methods: {
        getDesc(data) {
            this.$emit("DashboardDesc", data);
        },
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
