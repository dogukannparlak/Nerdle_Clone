import React, { useState, useEffect } from 'react';
import './style/App.css';
import Keyboard from './components/Keyboard';
import { evaluate } from 'mathjs';
import Board from './components/Board';
import nerdleConfig from './nerdle.config';

const App = () => {

  const questionsList = nerdleConfig.questions;

  const [boardData, setBoardData] = useState(null);

  const [message, setMessage] = useState(null);

  const [questionArray, setQuestionArray] = useState([]);

  const [messageIsError, setMessageIsError] = useState(false);

  const [column, setColumn] = useState(8);

  const [columnArray, setColumnArray] = useState([0, 1, 2, 3, 4, 5, 6, 7]);



  useEffect(() => {
    setupgame();
  }, []);


  const setupgame = (columnNo) => {
    const boardColumn = columnNo || column;
    const questionIndex = Math.floor(Math.random() * questionsList[boardColumn].length);
    let newBoardData = {
      ...boardData,
      solution: questionsList[boardColumn][questionIndex],
      rowIndex: 0,
      boardWords: [],
      boardRowStatus: [],
      presentCharArray: [],
      absentCharArray: [],
      correctCharArray: [],
      status: 'IN_PROGRESS',
    };
    setBoardData(newBoardData);
    setQuestionArray([]);

  };


  const handleMessage = (message, messageType) => {

    if (messageType === 'success') {

      setMessageIsError(false);
    } else {
      setMessageIsError(true);
    }

    setMessage(message);

    setTimeout(() => {
      setMessage(null);
    }, 5000);
  }


  const checkGuess = (Guess) => {
    
    let boardWords = boardData.boardWords;
    let boardRowStatus = boardData.boardRowStatus;
    let solution = boardData.solution;
    let presentCharArray = boardData.presentCharArray;
    let absentCharArray = boardData.absentCharArray;
    let correctCharArray = boardData.correctCharArray;
    let rowIndex = boardData.rowIndex;
    let rowStatus = [];
    let matchCount = 0;
    let status = boardData.status;
    let correct = 0;
    let numberCount = {};
    for (let i = 0; i < solution.length; i++) {
      let character = solution[i];
      if (numberCount[character]) {
        numberCount[character] += 1;
      }
      else {
        numberCount[character] = 1;
      }
    }


    for (let index = 0; index < solution.length; index++) {

      if (solution.charAt(index) === Guess[index]) {

        matchCount++;

        rowStatus.push('correct');

        correct += 1;

        numberCount[Guess[index]] -= 1;

        correctCharArray.push(Guess[index]);
      } else {

        rowStatus.push('checking');
      }
    }

    for (let index = 0; index < solution.length; index++) {

      if (rowStatus[index] !== 'correct') {

        if (solution.includes(Guess[index]) && numberCount[Guess[index]] > 0) {

          rowStatus[index] = 'present';

          numberCount[Guess[index]] -= 1;

          presentCharArray.push(Guess[index]);
        } else {

          rowStatus[index] = 'absent';

          absentCharArray.push(Guess[index]);
        }
      }
    }

    if (matchCount === parseInt(column))
    {

      status = 'WIN';

      handleMessage('🎉YOU WON', 'success');
    }
    else if (rowIndex + 1 === 6)
    {
      status = 'LOST';
      handleMessage('You Lost, the correct calculation was : ' + boardData.solution, 'lose');
    }
    boardRowStatus.push(rowStatus);
    boardWords[rowIndex] = Guess;

    let newBoardData = {
      ...boardData,
      boardWords: boardWords,
      boardRowStatus: boardRowStatus,
      rowIndex: rowIndex + 1,
      status: status,
      presentCharArray: presentCharArray,
      absentCharArray: absentCharArray,
      correctCharArray: correctCharArray,
    };
    setBoardData(newBoardData);
  };


  const enterCurrentText = (questions) => {
    let boardWords = boardData.boardWords;
    let rowIndex = boardData.rowIndex;
    boardWords[rowIndex] = questions;
    let newBoardData = { ...boardData, boardWords: boardWords };
    setBoardData(newBoardData);
  };

  /* --------------------------- keyboard functions --------------------------- */
  const onEnter = () => {
    let expression = '';
    let questionResult = '';
    if (questionArray.length === parseInt(column)) {
      if (questionArray.includes('=')) {
        for (let i = 0; i < questionArray.length; i++) {
          let number = questionArray[i]
          if (number === '=') {
            for (let j = i; j < questionArray.length; j++) {
              if (questionArray[j] === '=') continue;
              questionResult = questionResult + questionArray[j];
            }
            break;
          } else {
            if (number === '\u2212') number = '-';
            expression = expression + number;
          }
        }
        if (!(evaluate(expression) === parseInt(questionResult))) {
          handleMessage("That guess doesn't compute!", 'error');
        } else {
          checkGuess(questionArray);
          setQuestionArray([]);
        }
      } else {
        handleMessage("That guess doesn't compute!", 'error');
      }
    }
    else {
      handleMessage('Incomplete row', 'error');
    }
  }
  const onDelete = () => {
    questionArray.splice(questionArray.length - 1, 1);
    setQuestionArray([...questionArray]);
  }
  const handleKeyPress = (key) => {
    if (typeof key === 'string') key = key.toUpperCase();
    if (boardData.rowIndex > 5 || boardData.status === 'WIN') return;
    if (key === 'ENTER') {
      onEnter();
      return;
    } else if (key === 'DELETE' || key === 'BACKSPACE') {
      onDelete();
    } else if (questionArray.length < column) {
      if (isNaN(key) && key !== ['+', '\u2212', '-', '/', '*', '=',].find(val => val === key)) return;
      if (key === '-') key = '\u2212';
      questionArray.push(key);
      setQuestionArray([...questionArray]);
    }
    enterCurrentText(questionArray);
  }

  return (

    <div className="container" >
      <div className="top">
        <div className="setting">
          <div className="reset-board nBtn" style={{backgroundColor: "dodgerblue"}} onClick={() => setupgame()}>
            Play again
          </div>
        </div>
      </div>{message && <div className="message" style={messageIsError ? nerdleConfig.theme.messageColor.error : nerdleConfig.theme.messageColor.success}>{message}</div>}
      {column && (
        <>
          <Board colArr={columnArray} boardData={boardData} />
          <div className="bottom">
            <Keyboard boardData={boardData} handleKeyPress={handleKeyPress} onEnter={onEnter} onDelete={onDelete} />
          </div>
        </>
      )}
    </div>
  );
};

export default App;
