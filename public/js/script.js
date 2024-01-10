const adviceModule = (() => {
    const advicesArray = ['Наш кофе самый лучший!', 'Покупайте кофе только у нас!',
        'Новым кофеманам скидка!', 'Мы открылись!', 'Закажи кофе прямо сейчас!'];

    return {
      getRandomAdvice: ()=> {
        const index = Math.floor(Math.random()*advicesArray.length);
        return advicesArray[index];
      }
    }
  })();

function advice() {
     alert(adviceModule.getRandomAdvice());
}
