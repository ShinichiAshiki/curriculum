let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
for ( var i = 0; i < numbers.length; i++){
    if( numbers[i] % 2 === 0){
        isEven(numbers[i]);
   }
}
function isEven(num) {
    console.log(num + 'は偶数です');
}

class Car {
    constructor(gass,num){
        this.gass = gass;
        this.num = num;
    }
    getNumGas(){
        console.log('ガソリンは' + this.gass + 'です。ナンバーは'+ this.num + 'です')
    }
}

let car = new Car(20.5,1234);
car.getNumGas();