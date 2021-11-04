//
// Quiz JS
//

import http from './src/services';
import QuizLib from './src/components/Quiz';
import ModalLib from './src/components/Modal';
import { getQuiz, getQuizNext } from './src/services/general';

http.init();

(function() {
  'use strict';

  // Quiz
  const data = [
    {
      id: 1,
      question: 'Which industry are you working in?',
      type: 'tags', //
      answers: [
        {
          id: 1,
          label: 'Advertising & Media'
        },
        {
          id: 2,
          label: 'Automotive'
        },
        {
          id: 3,
          label: 'Building  and Infrastructure'
        },
      ]
    },
    {
      id: 2,
      question: 'Who is your customer?',
      type: 'binary',
      answers: [
        {
          id: 11,
          label: 'Product'
        },
        {
          id: 12,
          label: 'Service'
        },
      ]
    },
    {
      id: 3,
      question: 'Click the phase that is suitable for your product',
      type: 'step',
      answers: [
        {
          id: 21,
          label: 'Development'
        },
        {
          id: 22,
          label: 'Launch'
        },
        {
          id: 23,
          label: 'Growth'
        },
        {
          id: 22,
          label: 'Launch'
        },
        {
          id: 23,
          label: 'Growth'
        },
      ]
    }
  ];

  const onSubmit = (result, step = null) => {
    console.log(result, step);
    // Show loader
    document.querySelector('.loader__page').setAttribute('data-state', 'open');

    setTimeout(() => {
      console.log(result);

      // Hide loader
      document.querySelector('.loader__page').setAttribute('data-state', 'close');

      // Open result
      setTimeout(() => {
        document.querySelector('.quiz__result').setAttribute('data-state', 'open');
      }, 600);

    }, 4000);
  };

  const onQuizNext = (step = null) => {
    console.log(result, step);
    if (step != null) {
        getQuizNext(step).then(function (response) {
            console.log(response);
            quiz.createQuestion(response.data.quiz, step)
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        });
    } else {
        getQuiz().then(function (response) {
            console.log(response);
            quiz.setTotalCount(response.data.total)
            quiz.createQuestion(response.data.quiz, 0)
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
