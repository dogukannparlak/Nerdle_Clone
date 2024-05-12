import React from 'react'

export default function Board({ colArr, boardData }) {
    return (
        // Tahtayı sarmalayan ana div
        <div className="cube">

            {[0, 1, 2, 3, 4, 5].map((row, rowIndex) => (

                <div className={'cube-row '} key={rowIndex}>

                    {colArr.map((column, numberIndex) => (

                        <div
                            key={numberIndex}
                            className={`number ${boardData && boardData.boardRowStatus[row]
                                ? boardData.boardRowStatus[row][column]
                                : ''
                            }`}
                        >

                            {boardData &&
                                boardData.boardWords[row] &&
                                boardData.boardWords[row][column]}
                        </div>
                    ))}
                </div>
            ))}
        </div>
    )
}
