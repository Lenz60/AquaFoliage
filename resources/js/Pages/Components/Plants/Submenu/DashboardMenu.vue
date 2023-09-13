<template>
    <div>
        <ul class="menu rounded-box w-full h-full visible">
            <li @click="$emit('DashboardDesc', 'Plants')">
                <a>Favourite Plants</a>
            </li>
            <li @click="$emit('DashboardDesc', 'NutDefs')">
                <a>Favourite Nutrient Deficiencies</a>
            </li>
            <li @click="$emit('DashboardDesc', 'Algaes')">
                <a>Favourite Algaes</a>
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

<!-- <style lang="scss" scoped></style> -->
