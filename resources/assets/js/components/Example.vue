<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div id="question">
                        <h2>{{currentQuestion.question}}</h2>
                        <span v-if="currentQuestion.description">
                            <pre class="description">{{currentQuestion.description}}</pre>
                        </span>

                        <span v-if="currentQuestion.question2" class="question2">
                            <h4>{{currentQuestion.question2}} </h4>
                        </span>

                        <span v-if="currentQuestion.proposition" class="proposition">
                            <h4>{{currentQuestion.proposition}} </h4>
                        </span>

                        <span v-if="currentQuestion.taxExcerpt" >                            
                            <p class="taxExcerpt">
                                <span v-if="currentQuestion.taxExcerpt.heading1" class="text-bold">{{currentQuestion.taxExcerpt.heading1}}</span><br/>
                                <span v-if="currentQuestion.taxExcerpt.heading2" class="text-bold">{{currentQuestion.taxExcerpt.heading2}}</span>
                                {{currentQuestion.taxExcerpt.text}} 
                            </p>
                            <span v-if="currentQuestion.taxExcerpt.link" class="text-center">
                                <a :href="currentQuestion.taxExcerpt.link" target="_blank">{{currentQuestion.taxExcerpt.link}}</a>
                            </span>
                        </span>

                        <div id="answers" class="row text-center">
                            <div v-for="option in currentQuestion.answers" class="col-md"> 
                                <button v-if="option.goto !== 0" type="button" class="btn btn-sm btn-dark uniform-width" 
                                    :class="{'btn-outline-success': option.choice == 'Yes',
                                             'btn-outline-warning': option.choice == 'No',
                                             'btn-outline-info': option.choice == 'More',
                                             'btn-outline-primary': option.choice == 'Next',
                                             'btn-outline-dark': option.choice == 'Start Over'
                                            }"
                                    @click.prevent="action(option)">{{option.choice}}
                                </button>
                                <a v-else class="btn btn-sm btn-dark uniform-width" 
                                    :class="{'btn-outline-success': option.choice == 'Yes',
                                             'btn-outline-warning': option.choice == 'No',
                                             'btn-outline-info': option.choice == 'More',
                                             'btn-outline-primary': option.choice == 'Next',
                                             'btn-outline-dark': option.choice == 'Start Over'
                                            }"
                                    :href="option.link" target="_blank">{{option.choice}}
                                </a>
                            </div>
                        </div>

                        <p v-if="currentQuestion.taxDisclaimer" class="taxDisclaimer text-left">
                            <span class="text-bold">TAX DISCLAIMER:</span> {{currentQuestion.taxDisclaimer}} 
                        </p>
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
            //console.log(this.questions)

            this.questionIndex = 0
            this.currentQuestion = this.questions[this.questionIndex]

            //console.log(this.currentQuestion)

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
    #answers a{
        color: white;
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

    .taxExcerpt{
        width: 70%;
        margin: 1vh auto;
        padding: 3vh;
        background: skyblue;
        color: black;
        border: 1px solid;
        border-radius: 3px;
    }
    .taxDisclaimer{
       color: yellow;
       background: darkgrey;
       font-size: smaller; 
       padding: 1vh;
    }
    .text-bold{
        font-weight: bold;
    }
</style>
