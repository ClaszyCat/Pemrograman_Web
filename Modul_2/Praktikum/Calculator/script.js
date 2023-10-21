const upperValue = document.querySelector(".upper-value");
const lowerValue = document.querySelector(".lower-value");

let currentValue = "";
let currentOperator = "";
let previousValue = "";
let shouldReset = false;

let updateDisplay = () => {
  upperValue.textContent = previousValue + "" + currentOperator;
  lowerValue.textContent = currentValue;
};

let calculate = () => {
  const tempPrev = parseFloat(previousValue);
  const tempCurrent = parseFloat(currentValue);
  switch (currentOperator) {
    case "+":
      currentValue = tempPrev + tempCurrent;
      break;
    case "-":
      currentValue = tempPrev - tempCurrent;
      break;
    case "x":
      currentValue = tempPrev * tempCurrent;
      break;
    case "/":
      if (currentValue !== 0) {
        currentValue = tempPrev / tempCurrent;
        currentValue = currentValue.toFixed(4);
      } else {
        currentValue = "Error";
      }
      break;
    case "%":
      currentValue = tempPrev % tempCurrent;
      break;
    case "^":
      currentValue = tempPrev ** tempCurrent;
      break;
  }

  previousValue = currentValue.toString();
  currentOperator = "";
  updateDisplay();
};

const buttons = document.querySelectorAll(".btn");
buttons.forEach((button) => {
  button.addEventListener("click", () => {
    const value = button.textContent;
    if (!isNaN(value) || value === ".") {
      if (shouldReset) {
        shouldReset = false;
        currentValue = "";
      }
      // Input angka atau titik desimal
      currentValue += value;
    } else if (
      value === "+" ||
      value === "-" ||
      value === "x" ||
      value === "/" ||
      value === "%" ||
      value === "^"
    ) {
      // Input operator
      if (currentValue !== "") {
        if (previousValue !== "") {
          calculate();
        } else {
          previousValue = currentValue;
        }
        currentOperator = value;
        currentValue = "";
        shouldReset = false;
      }
    } else if (value === "=") {
      // Input tanda sama dengan (=)
      if (currentValue !== "" && previousValue !== "") {
        calculate();
        shouldReset = true;
      }
    } else if (value === "C") {
      // Clear (bersihkan)
      previousValue = "";
      currentOperator = "";
      currentValue = "";
      shouldReset = false;
    } else if (value === "+/-") {
      // Toggle tanda positif/negatif
      if (currentValue !== "") {
        currentValue = (parseFloat(currentValue) * -1).toString();
      }
    }
    updateDisplay();
  });
});
