<template>
    <div>
        <a-typography-title>匹克球</a-typography-title>
        <a-typography-title>裁判規則考試</a-typography-title>
        <div>
            <template v-for="(question, i) in questions">
                <div>{{ i+1 }}.{{ question.question }}</div>
                <a-radio-group v-model:value="question.answer">
                    <template v-for="(option,j) in question.options">
                        <div>
                            <a-radio :value="option">{{ String.fromCharCode(65+j) }}. {{ option }}</a-radio>
                        </div>
                    </template>
                </a-radio-group>
                <div>{{ question.correct }}</div>
                <hr>
            </template>
        </div>
    </div>
</template>

<script>
export default {
    props: ['questions'],
    components: {
    },
    data() {
        return {
        }
    },
    mounted() {
    },
    methods: {
    }
}
</script>