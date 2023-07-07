<template>
    <div class="relative bg-neutral">
        <Navbar class="sticky top-0 z-50"></Navbar>
        <div
            class="flex border-2 border-red-600 h-screen w-screen overflow-x-auto"
        >
            <div class="w-[30%] h-screen">
                <Menu></Menu>
            </div>
            <div class="w-[70%] h-screen">
                <Section></Section>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "./Components/Home/Navbar.vue";
import Menu from "./Components/Plants/Menu.vue";
import Section from "./Components/Plants/Section.vue";
export default {
    components: {
        Navbar,
        Menu,
        Section,
    },
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
