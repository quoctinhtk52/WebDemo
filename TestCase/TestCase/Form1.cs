using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
using System.Threading;
using OpenQA.Selenium.Support.UI;

namespace TestCase
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnLogin_Click(object sender, EventArgs e)
        {
            IWebDriver drive = new ChromeDriver();
            drive.Url = "http://nhacvippro.co.nf/index.php";

           
        }

        private void btnSuabh_Click(object sender, EventArgs e)
        {
            IWebDriver drive = new ChromeDriver();
            drive.Url = "http://nhacvippro.co.nf/index.php";

            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(3)")).SendKeys("Admin");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(7)")).SendKeys("quoctinh");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input.button")).Click();

            Thread.Sleep(2000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > table > tbody > tr > td:nth-child(1) > div > b > b > a")).Click();
            Thread.Sleep(1000);
            ///////////////////////////Bài hát có tồn tại//////////////////////
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > div:nth-child(4) > table > tbody > tr:nth-child(11) > td:nth-child(7) > font:nth-child(2) > a")).Click();
            Thread.Sleep(1000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(2)")).SendKeys(txtTenbh.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(5)")).SendKeys(txtCasi.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(8)")).SendKeys(txtTheloai.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(11)")).SendKeys(txtLienkn.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(14)")).SendKeys(txtAnh.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input.button")).Click();
            Thread.Sleep(2000);
            /////////////////////////////Bài hát không tồn tại//////////////////////////////////////
           
            //Thread.Sleep(3000);
            lbTbeditbh.Text = drive.FindElement(By.Id("thongbao")).Text;
            
            drive.Quit();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            IWebDriver drive = new ChromeDriver();
            drive.Url = "http://nhacvippro.co.nf/index.php";

            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(3)")).SendKeys("Admin");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(7)")).SendKeys("quoctinh");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input.button")).Click();

            Thread.Sleep(2000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > table > tbody > tr > td:nth-child(1) > div > b > b > a")).Click();
            Thread.Sleep(1000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > a")).Click();
            Thread.Sleep(1000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(2)")).SendKeys(txtTenbh.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(5)")).SendKeys(txtCasi.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(8)")).SendKeys(txtTheloai.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(11)")).SendKeys(txtLienkn.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(14)")).SendKeys(txtAnh.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input.button")).Click();
            Thread.Sleep(2000);
            lbTbeditbh.Text = drive.FindElement(By.Id("thongbao")).Text;
            drive.Quit();

        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            IWebDriver drive = new ChromeDriver();
            drive.Url = "http://nhacvippro.co.nf/index.php";

            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(3)")).SendKeys("Admin");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(7)")).SendKeys("quoctinh");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input.button")).Click();
            Thread.Sleep(2000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > table > tbody > tr > td:nth-child(2) > div > b > b > b > b > a")).Click(); // Click danh sách thành viên
            Thread.Sleep(2000);
            //////////////////////////////Thành viên có tồn tạo//////////////////////////////////////
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > div:nth-child(4) > table > tbody > tr:nth-child(4) > td:nth-child(9) > font > a")).Click(); // Xác định thành viên để sửa
            Thread.Sleep(1000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(2)")).SendKeys(txtHolot.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(5)")).SendKeys(txtTen.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(8)")).SendKeys(txtNam.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(9)")).SendKeys(txtThang.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(10)")).SendKeys(txtNgay.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(13)")).SendKeys(txtSdt.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(16)")).SendKeys(txtGioitinh.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input:nth-child(19)")).SendKeys(txtCapdo.Text);
            Thread.Sleep(1000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > form > input.button")).Click();
            /////////////////////////////////Thành Viên Không Tồn Tại///////////////////////////////////
            //drive.Url = "http://nhacvippro.co.nf/choosing.php?mod=sua_tv&&maso=1589658";
            //Thread.Sleep(3000);
            lbEditv.Text = drive.FindElement(By.Id("thongbao")).Text;
            drive.Quit();





        }

        private void btnExit_Click(object sender, EventArgs e)
        {
            IWebDriver drive = new ChromeDriver();
            drive.Url = "http://nhacvippro.co.nf/index.php";

            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(3)")).SendKeys("Admin");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(7)")).SendKeys("quoctinh");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input.button")).Click();
            Thread.Sleep(2000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > div:nth-child(16) > a")).Click();
            Thread.Sleep(1000);
            lbLogin.Text = drive.FindElement(By.Id("thongbao")).Text;
            drive.Quit();
        }

        private void btnReg_Click(object sender, EventArgs e)
        {
            IWebDriver drive = new ChromeDriver();
            drive.Url = "http://nhacvippro.co.nf/index.php";
            drive.FindElement(By.CssSelector("body > div.auth > center > a:nth-child(1)")).Click();
            Thread.Sleep(1000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input:nth-child(2)")).SendKeys(txtUserreg.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input:nth-child(5)")).SendKeys(txtPassreg.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input:nth-child(8)")).SendKeys(txtHolotreg.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input:nth-child(11)")).SendKeys(txtTenreg.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input:nth-child(14)")).SendKeys(txtSdtreg.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input:nth-child(17)")).SendKeys(txtGioitinhreg.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input:nth-child(20)")).SendKeys(txtNamreg.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input:nth-child(21)")).SendKeys(txtThangreg.Text);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input:nth-child(22)")).SendKeys(txtNgayreg.Text);
            
            Thread.Sleep(1000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > b > form > input.button")).Click();
            Thread.Sleep(1000);
            lbReg.Text = drive.FindElement(By.Id("thongbao")).Text;
            drive.Quit();

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void btnDeletebh_Click(object sender, EventArgs e)
        {
            IWebDriver drive = new ChromeDriver();
            drive.Url = "http://nhacvippro.co.nf/index.php";

            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(3)")).SendKeys("Admin");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input:nth-child(7)")).SendKeys("quoctinh");
            drive.FindElement(By.CssSelector("body > div.auth > div > center > form > input.button")).Click();

            Thread.Sleep(2000);
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > table > tbody > tr > td:nth-child(1) > div > b > b > a")).Click();
            Thread.Sleep(1000);
            //////////////////////////////Bài hát tồn tại//////////////////////////////////
            drive.FindElement(By.CssSelector("body > div:nth-child(2) > div:nth-child(4) > table > tbody > tr:nth-child(11) > td:nth-child(7) > font:nth-child(1) > a")).Click();
            //////////////////////////////Bài hát không tồn tại///////////////////////////
            //drive.Url = "http://nhacvippro.co.nf/choosing.php?mod=xoa_bh&&maso=318569";
            lbTbeditbh.Text = drive.FindElement(By.Id("thongbao")).Text;
            drive.Quit();
        }

        

        


        
    }
}
