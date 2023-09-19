<template>
    <div>
        <ul class="menu rounded-box w-full h-full visible">
            <li @click="$emit('DashboardDesc', 'Insert')">
                <a>Insert Post</a>
            </li>
            <li @click="$emit('DashboardDesc', 'Update')">
                <a>Update Post</a>
            </li>
            <li @click="$emit('DashboardDesc', 'Delete')">
                <a>Delete Post</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
