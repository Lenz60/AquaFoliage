<template>
    <div class="relative bg-neutral overflow-x-hidden no-scrollbar">
        <Navbar class="sticky top-0 z-50"></Navbar>
        <div class="flex h-screen w-screen">
            <div class="w-[30%] h-screen">
                <Menu
                    :Content="content"
                    :Plants="plants"
                    :Algaes="algae"
                    :NutDefs="nutrientDef"
                ></Menu>
            </div>
            <div class="w-[70%] h-screen">
                <div v-if="content == 'plants'">
                    <Detail :Desc="content" :Payload="payload"></Detail>
                </div>
                <div v-else-if="content == 'nutDef'">
                    <Detail :Desc="content" :Payload="payload"></Detail>
                </div>
                <div v-else>
                    <Detail :Desc="content" :Payload="payload"></Detail>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "../Home/Navbar.vue";
import Menu from "./Menu.vue";
import Detail from "./Content/DetailPlants.vue";
export default {
    props: ["content", "plants", "algae", "nutrientDef", "payload"],
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
