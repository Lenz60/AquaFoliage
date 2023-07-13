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
            </div>
            <div class="w-[70%] h-screen">
                <Detail :Plant="plant"></Detail>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "../Home/Navbar.vue";
import Menu from "./Menu.vue";
import Detail from "./Content/DetailPlants.vue";
export default {
    props: ["plants", "algae", "nutrientDef", "plant"],
    components: {
        Menu,
        Detail,
        Navbar,
    },
    setup() {
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
