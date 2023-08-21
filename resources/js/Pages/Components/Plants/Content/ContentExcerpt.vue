<template>
    <div>
        <h3 class="text-black">Content Excerpt</h3>
        <p>{{ content }}</p>
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
