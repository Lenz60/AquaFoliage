<template>
    <Head title="Aqua Foliage"> </Head>
    <Transition name="slide-fade">
        <div v-if="!isLoading">
            <div class="bg-[#101310] overflow-hidden">
                <Navbar class="sticky top-0 z-50"></Navbar>
                <Hero></Hero>
                <Section></Section>
                <Poem></Poem>
                <!-- <PreFooter></PreFooter> -->
                <Footer></Footer>
                <!-- <SinglePages :fish="fish"></SinglePages> -->
            </div>
        </div>
        <div v-else>
            <LoadingScreen :isLoading="isLoading" />
        </div>
    </Transition>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import LoadingScreen from "./Components/Home/LoadingScreen.vue";
import Navbar from "./Components/Home/Navbar.vue";
import Hero from "./Components/Home/Hero.vue";
import Section from "./Components/Home/Section.vue";
import Poem from "./Components/Home/Poem.vue";
import PreFooter from "./Components/Home/PreFooter.vue";
import Footer from "./Components/Home/Footer.vue";
import { onMounted, ref } from "vue";
// import SinglePages from "./Components/SinglePages.vue";
export default {
    components: {
        LoadingScreen,
        Head,
        Link,
        Navbar,
        Hero,
        Section,
        Poem,
        PreFooter,
        Footer,
    },
    // data() {
    //     return {
    //         fish: 0,
    //     };
    // },
    setup() {
        let isLoading = ref(true);

        onMounted(() => {
            // window.onload = function () {
            //     if (!window.location.hash) {
            //         window.location = window.location;
            //         window.location.reload();
            //     }
            // };
            setTimeout(() => {
                isLoading.value = false;
            }, 4000);
            console.log(isLoading.value);
        });
        return { isLoading };
    },
};
</script>

<style scoped>
.slide-fade-enter-active {
    transition: all 0.4s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    opacity: 0;
}
</style>
