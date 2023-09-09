<template>
    <div class="w-full flex flex-row">
        <div
            class="font-montserrat bg-neutral-focus text-primary h-screen overflow-x-auto no-scrollbar sidebar"
        >
            <ul class="menu p-5 w-full h-max">
                <div v-if="!Payload">
                    <div v-if="Content == 'plants'">
                        <PlantsMenu Class="show" :Plants="Plants"></PlantsMenu>
                        <NutDefMenu
                            Class="nutdef"
                            :NutDefs="NutDefs"
                        ></NutDefMenu>
                        <AlgaeMenu Class="algae" :Algaes="Algaes"></AlgaeMenu>
                    </div>
                    <div v-else-if="Content == 'nutDef'">
                        <PlantsMenu Class="hide" :Plants="Plants"></PlantsMenu>
                        <NutDefMenu
                            Class="show"
                            :NutDefs="NutDefs"
                        ></NutDefMenu>
                        <AlgaeMenu Class="hide" :Algaes="Algaes"></AlgaeMenu>
                    </div>
                    <div v-else-if="Content == 'algae'">
                        <PlantsMenu
                            Class="hide"
                            :Plants="Plants"
                            :Payload="Payload"
                        ></PlantsMenu>
                        <NutDefMenu
                            Class="hide"
                            :NutDefs="NutDefs"
                            :Payload="Payload"
                        ></NutDefMenu>
                        <AlgaeMenu
                            Class="show"
                            :Algaes="Algaes"
                            :Payload="Payload"
                        ></AlgaeMenu>
                    </div>
                    <div v-else-if="Content == 'Dashboard'">
                        <h3 class="text-xl p-5">Dashboard Menu</h3>
                        <DashboardMenu
                            @DashboardDesc="getDesc($event)"
                        ></DashboardMenu>
                    </div>
                    <div v-else>
                        <PlantsMenu
                            Class="hide"
                            :Plants="Plants"
                            :Payload="Payload"
                        ></PlantsMenu>
                        <NutDefMenu
                            Class="hide"
                            :NutDefs="NutDefs"
                            :Payload="Payload"
                        ></NutDefMenu>
                        <AlgaeMenu
                            Class="hide"
                            :Algaes="Algaes"
                            :Payload="Payload"
                        ></AlgaeMenu>
                    </div>
                </div>
                <div v-else>
                    <div v-if="Content == 'plants'">
                        <PlantsMenu
                            Class="show"
                            :Plants="Plants"
                            :Payload="Payload"
                        ></PlantsMenu>
                        <NutDefMenu
                            Class="hide"
                            :NutDefs="NutDefs"
                            :Payload="Payload"
                        ></NutDefMenu>
                        <AlgaeMenu
                            Class="hide"
                            :Algaes="Algaes"
                            :Payload="Payload"
                        ></AlgaeMenu>
                    </div>
                    <div v-else-if="Content == 'nutDef'">
                        <PlantsMenu
                            Class="hide"
                            :Plants="Plants"
                            :Payload="Payload"
                        ></PlantsMenu>
                        <NutDefMenu
                            Class="show"
                            :NutDefs="NutDefs"
                            :Payload="Payload"
                        ></NutDefMenu>
                        <AlgaeMenu
                            Class="hide"
                            :Algaes="Algaes"
                            :Payload="Payload"
                        ></AlgaeMenu>
                    </div>
                    <div v-else-if="Content == 'algae'">
                        <PlantsMenu
                            Class="hide"
                            :Plants="Plants"
                            :Payload="Payload"
                        ></PlantsMenu>
                        <NutDefMenu
                            Class="hide"
                            :NutDefs="NutDefs"
                            :Payload="Payload"
                        ></NutDefMenu>
                        <AlgaeMenu
                            Class="show"
                            :Algaes="Algaes"
                            :Payload="Payload"
                        ></AlgaeMenu>
                    </div>
                    <div v-else-if="Content == 'Dashboard'">
                        <h3 class="text-xl p-5">Dashboard Menu</h3>
                        <DashboardMenu
                            @DashboardDesc="getDesc($event)"
                        ></DashboardMenu>
                    </div>
                    <div v-else>
                        <PlantsMenu
                            Class="hide"
                            :Plants="Plants"
                            :Payload="Payload"
                        ></PlantsMenu>
                        <NutDefMenu
                            Class="hide"
                            :NutDefs="NutDefs"
                            :Payload="Payload"
                        ></NutDefMenu>
                        <AlgaeMenu
                            Class="hide"
                            :Algaes="Algaes"
                            :Payload="Payload"
                        ></AlgaeMenu>
                    </div>
                </div>
            </ul>
        </div>
        <div class="pr-2 pl-1">
            <div
                class="h-fit mt-1.5 p-2 w-fit bg-neutral shadow-2xl -ml-5 rounded-lg overflow-hidden hover:cursor-pointer"
                @click="showToggle()"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    height="25px"
                    viewBox="0 0 512 512"
                    class="hideSidebar fill-primary-focus"
                >
                    <path
                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160zm352-160l-160 160c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 438.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z"
                    />
                </svg>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import { gsap } from "gsap";
import PlantsMenu from "./Submenu/PlantsMenu.vue";
import NutDefMenu from "./Submenu/NutDefMenu.vue";
import AlgaeMenu from "./Submenu/AlgaeMenu.vue";
import DashboardMenu from "./Submenu/DashboardMenu.vue";

export default {
    props: ["Content", "Plants", "Algaes", "NutDefs", "Payload"],
    components: {
        PlantsMenu,
        NutDefMenu,
        AlgaeMenu,
        DashboardMenu,
        Link,
    },
    setup() {
        const isShow = ref(false);
        return { isShow };
    },
    methods: {
        getDesc(data) {
            this.$emit("DashboardDesc", data);
        },
        showToggle() {
            this.isShow = !this.isShow;

            //TODO V-if is show is true then

            if (this.isShow) {
                // gsap.to(".hideSidebar", { rotation: 180, duration: 1 });
                gsap.to(".hideSidebar", { scaleX: -1 });
                // gsap.to(".hideSidebar", { rotation: 0, duration: 1 });
                gsap.to(".sidebar", { width: "0%" });
                this.$emit("SidebarShow", "hideTime");
            } else {
                gsap.to(".hideSidebar", { scaleX: 1 });
                gsap.to(".sidebar", { width: "100%" });
                this.$emit("SidebarShow", "showTime");
            }

            console.log(this.isShow);
        },
        classProps(bool) {
            if (bool) {
                return "show";
            } else {
                return "hide";
            }
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
