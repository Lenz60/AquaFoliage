<template>
    <div class="bg-neutral">
        <!-- <h3 class="text-black">Content Excerpt</h3>
        <p>{{ content }}</p> -->
        <div
            class="flex flex-col justify-center items-center h-screen w-screen"
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
export default {
    props: ["content"],
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
