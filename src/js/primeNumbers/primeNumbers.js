window.addEventListener('load', function ()
{
    getTypeNumbers();
});

let query = +prompt('Введите предельное число значений');
let arrPrimeNumbers = [];
let arrCompositeNumbers = [];

function getTypeNumbers()
{
    for (let i = 2; i < query; i++)
    {
        let isPrime = true;
        for (let j = 2; j < i; j++)
        {
            if (i % j === 0)
            {
                isPrime = false;
            }
        }

        if (isPrime)
        {
            arrPrimeNumbers.push(i);
        }
        else
        {
            arrCompositeNumbers.push(i);
        }
    }

    printArrNumbers();
}

function printArrNumbers()
{
    console.log('Простые числа: \n' + arrPrimeNumbers + '.\n\n' + 'Составные числа: \n' + arrCompositeNumbers + '.\n');
}