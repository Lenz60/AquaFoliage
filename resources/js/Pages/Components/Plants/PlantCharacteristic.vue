<template>
    <div class="bg-primary-focus h-screen">
        <Navbar class="sticky top-0 z-50"></Navbar>
        <div class="flex flex-row h-screen">
            <div class="w-[30%] h-full overflow-x-visible">
                <Menu
                    :Payload="payload"
                    :Content="content"
                    :Plants="plants"
                    :Algaes="algae"
                    :NutDefs="nutrientDef"
                ></Menu>
            </div>
            <div class="w-[70%]">
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
        // console.log(props.content);
        return {};
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
