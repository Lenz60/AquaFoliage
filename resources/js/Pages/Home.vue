<template>
    <div>
        <Navbar></Navbar>
        <Hero></Hero>
        <Section></Section>
        <Poem></Poem>
        <PreFooter></PreFooter>
        <Footer></Footer>
        <!-- <SinglePages :fish="fish"></SinglePages> -->
    </div>
</template>

<script>
import {gsap} from "gsap"
import Navbar from "./Components/Navbar.vue";
import Hero from "./Components/Hero.vue";
import Section from "./Components/Section.vue";
import Poem from "./Components/Poem.vue";
import PreFooter from "./Components/PreFooter.vue";
import Footer from "./Components/Footer.vue";
// import SinglePages from "./Components/SinglePages.vue";
export default {
    components: {
        Navbar,
        Hero,
        Section,
        Poem,
        PreFooter,
        Footer,
    },
    data() {
        return {
            fish: 0,
        };
    },
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
