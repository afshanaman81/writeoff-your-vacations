<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Does your Vacation qualify for a Tax write off?</h2>
                    </div>

                    <div class="panel-body">
                        <div id="question">
                            <h5 class="text-left">{{currentQuestion.question}}</h5>
                            <span v-if="currentQuestion.description">
                                <pre class="description">{{currentQuestion.description}}</pre>
                            </span>
                            <div id="answers" class="row text-center">
                                <div v-for="option in currentQuestion.answers" class="col-md"> 
                                    <button type="button" class="btn btn-sm btn-dark uniform-width" 
                                        :class="{'btn-outline-success': option.choice == 'Yes',
                                                 'btn-outline-warning': option.choice == 'No',
                                                 'btn-outline-info': option.choice == 'More',
                                                 'btn-outline-primary': option.choice == 'Next',
                                                 'btn-outline-dark': option.choice == 'Start Over'
                                                }"
                                        @click="action(option)">{{option.choice}}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>                
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const questions = require("../../data/questions.json")
    export default {
        data(){
            return {
                questions: [],
                questionIndex: 0,
                currentQuestion: {}
            }
        },
        mounted() {          
            this.questions = questions
            console.log(this.questions)

            this.questionIndex = 0
            this.currentQuestion = this.questions[this.questionIndex]

            console.log(this.currentQuestion)

        },
        methods:{
            action: function(option){
                console.log(option)
                this.questionIndex = option.goto - 1
                this.currentQuestion = this.questions[this.questionIndex]
                console.log(this.currentQuestion)
            }
        }
    }
</script>

<style scoped>
    #answers,
    #question{
        margin: 5vh auto;
    }

    .description{
        color: red;
        font-style: italic;
        font-size: 14px;
        overflow-x: hidden;
    }
    pre {
        white-space: pre-wrap;       /* css-3 */
        white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
        white-space: -pre-wrap;      /* Opera 4-6 */
        white-space: -o-pre-wrap;    /* Opera 7 */
        word-wrap: break-word;       /* Internet Explorer 5.5+ */
    }

</style>
