<template>
    <div>
        <div v-if="Class == 'hide'">
            <li>
                <details close>
                    <summary class="w-full h-full text-lg">
                        <div>
                            <img
                                src="/icons/algaeico.png"
                                class="w-[42px] h-[35.72px]"
                            />
                        </div>
                        <div>Algae Characteristics</div>
                    </summary>
                    <ul>
                        <li v-for="algae in Algaes">
                            <Link
                                :href="route('plantCharacteristic')"
                                :data="{ content: 'algae', id: algae.id }"
                                ><a>{{ algae.name }}</a></Link
                            >
                        </li>
                    </ul>
                </details>
            </li>
        </div>
        <div v-else-if="Class == 'show'">
            <li>
                <details open>
                    <summary class="w-full h-full text-lg">
                        <div>
                            <img
                                src="/icons/algaeico.png"
                                class="w-[42px] h-[35.72px]"
                            />
                        </div>
                        <div>Algae Characteristics</div>
                    </summary>
                    <ul>
                        <li v-for="algae in Algaes">
                            <Link
                                :href="route('plantCharacteristic')"
                                :data="{ content: 'algae', id: algae.id }"
                            >
                                <a>{{ algae.name }}</a>
                            </Link>
                        </li>
                    </ul>
                </details>
            </li>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: ["Class", "Algaes"],
    components: {
        Link,
    },
    setup() {},
};
</script>

<style lang="scss" scoped></style>
