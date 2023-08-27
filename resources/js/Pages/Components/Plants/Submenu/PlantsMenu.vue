<template>
    <div>
        <div v-if="Class == 'hide'">
            <ul>
                <li>
                    <details close>
                        <summary class="w-full h-full text-lg">
                            <div>
                                <img
                                    src="/icons/plantsico.png"
                                    class="w-[42px] h-[25px]"
                                />
                            </div>
                            <div>Plants Characteristics</div>
                        </summary>
                        <ul>
                            <li v-for="plant in Plants">
                                <Link
                                    :href="route('plantCharacteristic')"
                                    :data="{ content: 'plants', id: plant.id }"
                                >
                                    <a>{{ plant.name }}</a>
                                </Link>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
        <div v-else-if="Class == 'show'">
            <ul>
                <li>
                    <details open>
                        <summary class="w-full h-full text-lg">
                            <div>
                                <img
                                    src="/icons/plantsico.png"
                                    class="w-[42px] h-[25px]"
                                />
                            </div>
                            <div>Plants Characteristics</div>
                        </summary>
                        <ul>
                            <li v-for="plant in Plants">
                                <Link
                                    :href="route('plantCharacteristic')"
                                    :data="{ content: 'plants', id: plant.id }"
                                >
                                    <div v-if="Payload['id'] == plant.id">
                                        <a
                                            class="p-10 py-2 w-full h-max text-accent"
                                            >{{ plant.name }}</a
                                        >
                                    </div>
                                    <div v-else>
                                        <a>{{ plant.name }}</a>
                                    </div>
                                </Link>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: ["Class", "Plants", "Payload"],
    components: {
        Link,
    },
    setup() {
        const isActive = false;
        return { isActive };
    },
    methods: {
        toggleActive() {
            this.isActive = !this.isActive;
            console.log(this.isActive);
        },
    },
};
</script>

<!-- <style lang="scss" scoped></style> -->
