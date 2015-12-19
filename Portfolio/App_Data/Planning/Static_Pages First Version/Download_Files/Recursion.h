#pragma once

namespace Recursion {

	using namespace System;
	using namespace System::ComponentModel;
	using namespace System::Collections;
	using namespace System::Windows::Forms;
	using namespace System::Data;
	using namespace System::Drawing;

	/// <summary>
	/// Summary for RecursionForm
	/// </summary>
	public ref class RecursionForm : public System::Windows::Forms::Form
	{
	public:
		RecursionForm(void)
		{
			InitializeComponent();
			//
			//TODO: Add the constructor code here
			//
		}

	protected:
		/// <summary>
		/// Clean up any resources being used.
		/// </summary>
		~RecursionForm()
		{
			if (components)
			{
				delete components;
			}
		}
	private: System::Windows::Forms::Button^  btnCountUp;
	protected:

	protected:

	private: System::Windows::Forms::TextBox^  txtLog;
	private: System::Windows::Forms::TextBox^  txtBase;

	private: System::Windows::Forms::RichTextBox^  rtbOutput;
	private: System::Windows::Forms::Button^  btnClearAll;
	private: System::Windows::Forms::Label^  label1;
	private: System::Windows::Forms::Label^  label2;
	private: System::Windows::Forms::Label^  label3;
	private: System::Windows::Forms::Label^  label4;
	private: System::Windows::Forms::TextBox^  txtLevel;
	private: System::Windows::Forms::Button^  btnCountDown;


	protected:

	protected:

	private:
		/// <summary>
		/// Required designer variable.
		/// </summary>
		System::ComponentModel::Container ^components;

#pragma region Windows Form Designer generated code
		/// <summary>
		/// Required method for Designer support - do not modify
		/// the contents of this method with the code editor.
		/// </summary>
		void InitializeComponent(void)
		{
			this->btnCountUp = (gcnew System::Windows::Forms::Button());
			this->txtLog = (gcnew System::Windows::Forms::TextBox());
			this->txtBase = (gcnew System::Windows::Forms::TextBox());
			this->rtbOutput = (gcnew System::Windows::Forms::RichTextBox());
			this->btnClearAll = (gcnew System::Windows::Forms::Button());
			this->label1 = (gcnew System::Windows::Forms::Label());
			this->label2 = (gcnew System::Windows::Forms::Label());
			this->label3 = (gcnew System::Windows::Forms::Label());
			this->label4 = (gcnew System::Windows::Forms::Label());
			this->txtLevel = (gcnew System::Windows::Forms::TextBox());
			this->btnCountDown = (gcnew System::Windows::Forms::Button());
			this->SuspendLayout();
			// 
			// btnCountUp
			// 
			this->btnCountUp->Location = System::Drawing::Point(257, 36);
			this->btnCountUp->Name = L"btnCountUp";
			this->btnCountUp->Size = System::Drawing::Size(52, 36);
			this->btnCountUp->TabIndex = 0;
			this->btnCountUp->Text = L"Count Up";
			this->btnCountUp->UseVisualStyleBackColor = true;
			this->btnCountUp->Click += gcnew System::EventHandler(this, &RecursionForm::btnCountUp_Click);
			// 
			// txtLog
			// 
			this->txtLog->Location = System::Drawing::Point(137, 75);
			this->txtLog->Multiline = true;
			this->txtLog->Name = L"txtLog";
			this->txtLog->ScrollBars = System::Windows::Forms::ScrollBars::Vertical;
			this->txtLog->Size = System::Drawing::Size(323, 169);
			this->txtLog->TabIndex = 1;
			// 
			// txtBase
			// 
			this->txtBase->Location = System::Drawing::Point(196, 14);
			this->txtBase->Name = L"txtBase";
			this->txtBase->Size = System::Drawing::Size(36, 20);
			this->txtBase->TabIndex = 2;
			// 
			// rtbOutput
			// 
			this->rtbOutput->Location = System::Drawing::Point(12, 75);
			this->rtbOutput->Name = L"rtbOutput";
			this->rtbOutput->Size = System::Drawing::Size(82, 169);
			this->rtbOutput->TabIndex = 3;
			this->rtbOutput->Text = L"";
			// 
			// btnClearAll
			// 
			this->btnClearAll->Location = System::Drawing::Point(394, 42);
			this->btnClearAll->Name = L"btnClearAll";
			this->btnClearAll->Size = System::Drawing::Size(66, 26);
			this->btnClearAll->TabIndex = 4;
			this->btnClearAll->Text = L"Clear All";
			this->btnClearAll->UseVisualStyleBackColor = true;
			this->btnClearAll->Click += gcnew System::EventHandler(this, &RecursionForm::btnClearAll_Click);
			// 
			// label1
			// 
			this->label1->AutoSize = true;
			this->label1->Font = (gcnew System::Drawing::Font(L"Microsoft Sans Serif", 14.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
				static_cast<System::Byte>(0)));
			this->label1->Location = System::Drawing::Point(8, 9);
			this->label1->Name = L"label1";
			this->label1->Size = System::Drawing::Size(182, 24);
			this->label1->TabIndex = 5;
			this->label1->Text = L"Enter the base case:";
			// 
			// label2
			// 
			this->label2->AutoSize = true;
			this->label2->Location = System::Drawing::Point(12, 59);
			this->label2->Name = L"label2";
			this->label2->Size = System::Drawing::Size(42, 13);
			this->label2->TabIndex = 6;
			this->label2->Text = L"Output:";
			// 
			// label3
			// 
			this->label3->AutoSize = true;
			this->label3->Location = System::Drawing::Point(134, 59);
			this->label3->Name = L"label3";
			this->label3->Size = System::Drawing::Size(79, 13);
			this->label3->TabIndex = 7;
			this->label3->Text = L"Recursive Log:";
			// 
			// label4
			// 
			this->label4->AutoSize = true;
			this->label4->Font = (gcnew System::Drawing::Font(L"Microsoft Sans Serif", 14.25F, System::Drawing::FontStyle::Regular, System::Drawing::GraphicsUnit::Point,
				static_cast<System::Byte>(0)));
			this->label4->Location = System::Drawing::Point(253, 9);
			this->label4->Name = L"label4";
			this->label4->Size = System::Drawing::Size(135, 24);
			this->label4->TabIndex = 8;
			this->label4->Text = L"Enter the level:";
			// 
			// txtLevel
			// 
			this->txtLevel->Location = System::Drawing::Point(394, 12);
			this->txtLevel->Name = L"txtLevel";
			this->txtLevel->Size = System::Drawing::Size(40, 20);
			this->txtLevel->TabIndex = 9;
			// 
			// btnCountDown
			// 
			this->btnCountDown->Location = System::Drawing::Point(315, 36);
			this->btnCountDown->Name = L"btnCountDown";
			this->btnCountDown->Size = System::Drawing::Size(52, 36);
			this->btnCountDown->TabIndex = 10;
			this->btnCountDown->Text = L"Count Down";
			this->btnCountDown->UseVisualStyleBackColor = true;
			this->btnCountDown->Click += gcnew System::EventHandler(this, &RecursionForm::btnCountDown_Click);
			// 
			// RecursionForm
			// 
			this->AutoScaleDimensions = System::Drawing::SizeF(6, 13);
			this->AutoScaleMode = System::Windows::Forms::AutoScaleMode::Font;
			this->ClientSize = System::Drawing::Size(471, 256);
			this->Controls->Add(this->btnCountDown);
			this->Controls->Add(this->txtLevel);
			this->Controls->Add(this->label4);
			this->Controls->Add(this->label3);
			this->Controls->Add(this->label2);
			this->Controls->Add(this->label1);
			this->Controls->Add(this->btnClearAll);
			this->Controls->Add(this->rtbOutput);
			this->Controls->Add(this->txtBase);
			this->Controls->Add(this->txtLog);
			this->Controls->Add(this->btnCountUp);
			this->Name = L"RecursionForm";
			this->Text = L"FactionalForm";
			this->ResumeLayout(false);
			this->PerformLayout();

		}
#pragma endregion
		
		bool ClickOnce = false;
		int level; 
		int base;
		bool CountUp = false;

		private: Int32 Recursive(int n)
		{
			if (n == base)
			{
				txtLog->Text += "Base Case Reached! n = " + n.ToString();
				return n;
			}
			else
			{
				if (CountUp == true)
				{
					txtLog->Text += "Recursive Call! n = " + n.ToString() + Environment::NewLine;
					return Recursive(n + 1);
				}
				else
				{
					txtLog->Text += "Recursive Call! n = " + n.ToString() + Environment::NewLine;
					return Recursive(n - 1);
				}
			}
		}
		private: System::Void btnCountUp_Click(System::Object^  sender, System::EventArgs^  e) {
			CountUp = true;
			txtLog->Text = "";
			rtbOutput->Text = ""; 

			if (ValidInput(txtBase->Text, txtLevel->Text))
			{
				base = Int32::Parse(txtBase->Text);
				level = Int32::Parse(txtLevel->Text);

				if (level <= base)
				{
					Recursive(level);
					for (int i = level; i <= base; i++)
						rtbOutput->Text += "Level: " + i.ToString() + Environment::NewLine; 
				}
				else if (level == base)
					MessageBox::Show("You must enter a range!");
				else
					MessageBox::Show("You can't count up to " + base.ToString() + " from " + level.ToString() + "! You need to count down!"); 
			}
		}
		
		private: System::Void btnCountDown_Click(System::Object^  sender, System::EventArgs^  e) {
			CountUp = false;
			txtLog->Text = "";
			rtbOutput->Text = "";
	
			if (ValidInput(txtBase->Text, txtLevel->Text))
			{
				base = Int32::Parse(txtBase->Text);
				level = Int32::Parse(txtLevel->Text);

				if (level >= base)
				{
					Recursive(level);
					for (int i = level; i >= base; i--)
						rtbOutput->Text += "Level: " + i.ToString() + Environment::NewLine;
				}
				else if (level == base)
					MessageBox::Show("You must enter a range!");
				else 
					MessageBox::Show("You can't count down to " + base.ToString() + " from " + level.ToString() + "! You need to count up!"); 
			}
		}
		private: Boolean ValidInput(String^ Base, String^ Level) {

			if (String::IsNullOrEmpty(Base)) 
				MessageBox::Show("Invalid base input! Please enter a whole number");
			else if (!String::IsNullOrEmpty(Level))
				MessageBox::Show("Invalid level input! Please enter a whole number");
			else
				return true;

			return false;
		}
		private: System::Void btnClearAll_Click(System::Object^  sender, System::EventArgs^  e) {
			ClickOnce = false;
			txtBase->Text = "";
			txtLog->Text = "";
			rtbOutput->Text = "";
			txtLevel->Text = "";
		}
};
}
