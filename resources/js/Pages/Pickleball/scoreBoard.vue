<template>
    <div>
        <h1>Pickleball</h1>
        <p>Coming soon...</p>
        <div>
            <div class="text-center">
                <img :src="'/images/'+ (score.serving=='0'?'L':'R') +(score.server+1)+'.png'"/>
            </div>
            <table class="border-collapse border w-full">
                <tr>
                    <td colspan="2" class="border border-black text-center">
                        <div class="text-6xl">
                            <template v-if="score.serving==0">
                                {{ score.left }}-{{ score.right }}-{{ score.server+1 }}
                            </template>
                            <template v-else-if="score.serving==1">
                                {{ score.right }}-{{ score.left }}-{{ score.server+1 }}
                            </template>
                        </div>                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="border border-black text-center">
                        <a-button @click="changeScore('W')">得分</a-button>
                        <a-button @click="changeScore('L')">失分</a-button>
                    </td>
                </tr>
                <!-- <tr>
                    <td class="border border-black text-center">
                        <a-button @click="changeScore('W')">得分</a-button><br>
                        <a-button @click="changeScore('L')">失分</a-button>
                    </td>
                    <td class="border border-black text-center">
                        <a-button @click="changeScore('W')">得分</a-button><br>
                        <a-button @click="changeScore('L')">失分</a-button>
                    </td>
                </tr> -->
            </table>
        </div>
    </div>
</template>

<script>
export default {
    props: [],
    components: {
    },
    data() {
        return {
            score:{
                serving:0,
                server:1,
                left:0,
                right:0,
            }
        }
    },
    mounted() {
    },
    methods: {
        changeScore(result){
            if(result=='W'){
                if(this.score.serving==0){
                    this.score.left++
                }else{
                    this.score.right++
                }
            }else{
                if(this.score.server==0){
                    this.score.server=1
                }else{
                    this.score.server=0
                    this.score.serving=1-this.score.serving
                }
            }
            console.log('add')
        }
    }
}
</script>