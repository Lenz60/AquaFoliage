<template>
    <div class="w-full flex flex-row">
        <!-- Close the sidebar when the screen is md or sm  -->
        <div
            class="font-montserrat bg-neutral-focus text-primary h-screen overflow-x-auto no-scrollbar sidebar"
        >
            <ul
                class="menu p-5 w-full h-max text-xs sm:text-xs md:text-sm xl:text-md"
            >
                <div>
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
                        <h3 class="sm:text-sm text-sm font-bold p-5">
                            Dashboard
                        </h3>
                        <DashboardMenu
                            @DashboardDesc="getDesc($event)"
                        ></DashboardMenu>
                    </div>
                    <div v-else-if="Content == 'DashboardAdmin'">
                        <h3 class="sm:text-sm text-sm font-bold p-5">
                            Dashboard Admin
                        </h3>
                        <DashboardAdminMenu
                            @DashboardDesc="getDesc($event)"
                        ></DashboardAdminMenu>
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
import DashboardAdminMenu from "./Submenu/DashboardAdminMenu.vue";
import { watch } from "vue";
import { onBeforeMount } from "vue";
import { onBeforeUnmount } from "vue";

export default {
    props: ["Content", "Plants", "Algaes", "NutDefs", "Payload"],
    components: {
        PlantsMenu,
        NutDefMenu,
        AlgaeMenu,
        DashboardMenu,
        Link,
        DashboardAdminMenu,
    },
    setup() {
        const isShow = ref(false);

        return { isShow };
    },
    mounted() {
        const showToggle = () => {
            this.isShow = !this.isShow;

            if (this.isShow) {
                gsap.to(".hideSidebar", { scaleX: -1 });
                gsap.to(".sidebar", { width: "0%" });

                this.$emit("SidebarShow", "hideTime");
            } else {
                gsap.to(".hideSidebar", { scaleX: 1 });
                gsap.to(".sidebar", { width: "100%" });

                this.$emit("SidebarShow", "showTime");
            }

            console.log(this.isShow);
        };

        // Add an event listener to window resize events
        const resizeHandler = () => {
            if (window.innerWidth <= 768) {
                console.log("this is small");
                showToggle(); // Call the showToggle method
            }
        };

        window.addEventListener("resize", resizeHandler);

        // Cleanup the event listener when the component is unmounted
        const cleanup = () => {
            window.removeEventListener("resize", resizeHandler);
        };

        // Use beforeUnmount to clean up the event listener
        onBeforeUnmount(() => {
            cleanup();
        });
        // Attach showToggle as a method
        this.showToggle = showToggle;
    },
    methods: {
        getDesc(data) {
            this.$emit("DashboardDesc", data);
        },
        // showToggle() {
        //     this.isShow = !this.isShow;

        //     //TODO V-if is show is true then

        //     if (this.isShow) {
        //         // gsap.to(".hideSidebar", { rotation: 180, duration: 1 });
        //         gsap.to(".hideSidebar", { scaleX: -1 });
        //         // gsap.to(".hideSidebar", { rotation: 0, duration: 1 });
        //         gsap.to(".sidebar", { width: "0%" });
        //         this.$emit("SidebarShow", "hideTime");
        //     } else {
        //         gsap.to(".hideSidebar", { scaleX: 1 });
        //         gsap.to(".sidebar", { width: "100%" });
        //         this.$emit("SidebarShow", "showTime");
        //     }

        //     console.log(this.isShow);
        // },
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
