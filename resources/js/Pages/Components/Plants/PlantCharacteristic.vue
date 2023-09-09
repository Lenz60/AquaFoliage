<template>
    <div class="bg-primary-focus h-screen">
        <Navbar class="sticky top-0 z-50"></Navbar>
        <div class="flex flex-row h-screen">
            <div
                class="w-[40%] h-full overflow-x-visible"
                :class="{
                    'w-[10%]': showTime == true,
                    'w-[40%]': showTime == false,
                }"
            >
                <Menu
                    @SidebarShow="getSidebar($event)"
                    :Payload="payload"
                    :Content="content"
                    :Plants="plants"
                    :Algaes="algae"
                    :NutDefs="nutrientDef"
                ></Menu>
            </div>
            <div class="w-full">
                <!--? Use this alternate color for dark version   -->
                <!-- bg-primary-focus text-neutral-focus -->
                <!-- Apply both of the Detail Components and w-[70%] elements -->
                <!--?  -->
                <Detail
                    :Desc="content"
                    :Payload="payload"
                    :FavData="favData"
                    :State="state"
                    class="bg-primary-focus text-neutral-focus"
                ></Detail>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";
import Navbar from "../Home/Navbar.vue";
import Menu from "./Menu.vue";
import Detail from "./Content/DetailPlants.vue";
export default {
    props: [
        "content",
        "plants",
        "algae",
        "nutrientDef",
        "payload",
        "state",
        "favData",
    ],
    components: {
        Menu,
        Detail,
        Navbar,
    },
    setup(props) {
        let showTime = ref(false);
        // console.log(props.content);
        return { showTime };
    },
    methods: {
        getSidebar(data) {
            console.log(data);
            if (data === "showTime") {
                this.showTime = false;
            } else {
                this.showTime = true;
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
