<template>
    <div class="relative bg-neutral">
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
    props: {
        plants: Object,
        algae: Object,
        nutrientDef: Object,
    },
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
