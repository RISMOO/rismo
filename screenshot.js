const puppeteer = require("puppeteer")

const getScreenshot = async () => {


  const browser = await puppeteer.launch(

{
    
}

  )
  const page = await browser.newPage()
  await page.goto("https://rismo.fr")
  await page.screenshot({ path: "screenshot.png" })
  await browser.close()
}

getScreenshot()
