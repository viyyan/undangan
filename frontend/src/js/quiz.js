//
// Quiz JS
//

import http from './src/services';
import QuizLib from './src/components/Quiz';
import ModalLib from './src/components/Modal';
import { getQuiz, getQuizNext, postAnswers } from './src/services/general';

http.init();

(function() {
  'use strict';

  // Quiz


  const onSubmit = (answers) => {
    console.log(answers);
    // Show loader
    var data = {
        "answers": answers.join(".")
    }
    document.querySelector('.loader__page').setAttribute('data-state', 'open');
    postAnswers(data).then(function (response) {
        console.log(response.data);
        document.querySelector('.loader__page').setAttribute('data-state', 'close');
        quiz.setResult(response.data)
        document.querySelector('.quiz__result').setAttribute('data-state', 'open');
    })
    .catch(function (error) {
        console.log(error);
        document.querySelector('.loader__page').setAttribute('data-state', 'close');
    })
  };

  const onQuizNext = (step = null, answers = null) => {
    if (step != null || step > 1) {
        var params = {}
        if (answers !== null && answers.length > 0) {
            params['sub_options'] = answers.join(".");
            console.log(params);
        }
        // console.log(answers);
        getQuizNext(step, params).then(function (response) {
            quiz.createQuestion(response.data.quiz, step)
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        });
    } else {
        getQuiz().then(function (response) {
            quiz.setTotalCount(response.data.total)
            quiz.createQuestion(response.data.quiz, 1)
          })
          .catch(function (error) {
            // handle error
            console.log(error);
          });
    }
  };

  onQuizNext();
  var quiz = new QuizLib(onQuizNext, onSubmit).init();

  // Modal
  new ModalLib().init();
})();
