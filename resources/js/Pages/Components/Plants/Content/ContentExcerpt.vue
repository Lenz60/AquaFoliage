<template>
    <div data-theme="foliage">
        <div
            class="flex flex-col items-center justify-center h-screen w-full overflow-x-auto no-scrollbar"
        >
            <div class="items-center justify-center text-center">
                <h1
                    class="text-[200px] font-montserrat text-center text-primary"
                >
                    404
                </h1>
                <h2 class="text-[40px] font-montserrat text-primary pb-5">
                    Not Found
                </h2>
            </div>
            <div class="items-center justify-content-center">
                <h3
                    class="text-[20px] font-montserrat text-center text-primary"
                >
                    The page you requested is not found
                </h3>
            </div>
        </div>
    </div>
</template>

<script>
import Menu from "../Menu.vue";
export default {
    props: ["content"],
    components: {
        Menu,
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
