#pragma once

namespace ClassroomSeating {

	using namespace System;
	using namespace System::ComponentModel;
	using namespace System::Collections;
	using namespace System::Windows::Forms;
	using namespace System::Data;
	using namespace System::Drawing;

	/// <summary>
	/// Summary for MyForm
	/// </summary>
	public ref class MyForm : public System::Windows::Forms::Form
	{
	public:
		MyForm(void)
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
		~MyForm()
		{
			if (components)
			{
				delete components;
			}
		}
	private: System::Windows::Forms::Label^  label1;
	protected:
	private: System::Windows::Forms::Label^  label2;
	private: System::Windows::Forms::Label^  label3;
	private: System::Windows::Forms::Label^  label4;
	private: System::Windows::Forms::Label^  label5;
	private: System::Windows::Forms::Button^  btnShow;
	private: System::Windows::Forms::Button^  btnGroup;
	private: System::Windows::Forms::TextBox^  txtMean;
	private: System::Windows::Forms::Panel^  panel1;
	private: System::Windows::Forms::Button^  btnHighLow;
	private: System::Windows::Forms::Label^  lblHighest0;
	private: System::Windows::Forms::Label^  lblLowest0;


	private: System::Windows::Forms::Label^  lblHighest1;
	private: System::Windows::Forms::Label^  lblLowest1;



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
			this->label1 = (gcnew System::Windows::Forms::Label());
			this->label2 = (gcnew System::Windows::Forms::Label());
			this->label3 = (gcnew System::Windows::Forms::Label());
			this->label4 = (gcnew System::Windows::Forms::Label());
			this->label5 = (gcnew System::Windows::Forms::Label());
			this->btnShow = (gcnew System::Windows::Forms::Button());
			this->btnGroup = (gcnew System::Windows::Forms::Button());
			this->txtMean = (gcnew System::Windows::Forms::TextBox());
			this->panel1 = (gcnew System::Windows::Forms::Panel());
			this->btnHighLow = (gcnew System::Windows::Forms::Button());
			this->lblHighest0 = (gcnew System::Windows::Forms::Label());
			this->lblLowest0 = (gcnew System::Windows::Forms::Label());
			this->lblHighest1 = (gcnew System::Windows::Forms::Label());
			this->lblLowest1 = (gcnew System::Windows::Forms::Label());
			this->SuspendLayout();
			// 
			// label1
			// 
			this->label1->AutoSize = true;
			this->label1->ForeColor = System::Drawing::SystemColors::ControlLightLight;
			this->label1->Location = System::Drawing::Point(348, 26);
			this->label1->Name = L"label1";
			this->label1->Size = System::Drawing::Size(223, 13);
			this->label1->TabIndex = 0;
			this->label1->Text = L"Seating Chart Indicating Student Performance";
			// 
			// label2
			// 
			this->label2->AutoSize = true;
			this->label2->ForeColor = System::Drawing::SystemColors::ControlLightLight;
			this->label2->Location = System::Drawing::Point(12, 26);
			this->label2->Name = L"label2";
			this->label2->Size = System::Drawing::Size(34, 13);
			this->label2->TabIndex = 1;
			this->label2->Text = L"Mean";
			// 
			// label3
			// 
			this->label3->AutoSize = true;
			this->label3->ForeColor = System::Drawing::Color::Green;
			this->label3->Location = System::Drawing::Point(112, 57);
			this->label3->Name = L"label3";
			this->label3->Size = System::Drawing::Size(48, 13);
			this->label3->TabIndex = 2;
			this->label3->Text = L"90-100%";
			// 
			// label4
			// 
			this->label4->AutoSize = true;
			this->label4->ForeColor = System::Drawing::Color::Yellow;
			this->label4->Location = System::Drawing::Point(76, 84);
			this->label4->Name = L"label4";
			this->label4->Size = System::Drawing::Size(84, 13);
			this->label4->TabIndex = 3;
			this->label4->Text = L"Mean up to 89%";
			// 
			// label5
			// 
			this->label5->AutoSize = true;
			this->label5->ForeColor = System::Drawing::Color::Red;
			this->label5->Location = System::Drawing::Point(77, 109);
			this->label5->Name = L"label5";
			this->label5->Size = System::Drawing::Size(83, 13);
			this->label5->TabIndex = 4;
			this->label5->Text = L"Below the mean";
			// 
			// btnShow
			// 
			this->btnShow->Location = System::Drawing::Point(15, 202);
			this->btnShow->Name = L"btnShow";
			this->btnShow->Size = System::Drawing::Size(87, 35);
			this->btnShow->TabIndex = 5;
			this->btnShow->Text = L"Show Seats";
			this->btnShow->UseVisualStyleBackColor = true;
			this->btnShow->Click += gcnew System::EventHandler(this, &MyForm::btnShow_Click);
			// 
			// btnGroup
			// 
			this->btnGroup->Location = System::Drawing::Point(114, 202);
			this->btnGroup->Name = L"btnGroup";
			this->btnGroup->Size = System::Drawing::Size(87, 35);
			this->btnGroup->TabIndex = 6;
			this->btnGroup->Text = L"Show Students";
			this->btnGroup->UseVisualStyleBackColor = true;
			this->btnGroup->Click += gcnew System::EventHandler(this, &MyForm::btnGroup_Click);
			// 
			// txtMean
			// 
			this->txtMean->Location = System::Drawing::Point(79, 23);
			this->txtMean->Name = L"txtMean";
			this->txtMean->Size = System::Drawing::Size(87, 20);
			this->txtMean->TabIndex = 7;
			// 
			// panel1
			// 
			this->panel1->BackColor = System::Drawing::SystemColors::ControlLightLight;
			this->panel1->Location = System::Drawing::Point(215, 57);
			this->panel1->Name = L"panel1";
			this->panel1->Size = System::Drawing::Size(485, 240);
			this->panel1->TabIndex = 8;
			// 
			// btnHighLow
			// 
			this->btnHighLow->Location = System::Drawing::Point(61, 243);
			this->btnHighLow->Name = L"btnHighLow";
			this->btnHighLow->Size = System::Drawing::Size(99, 35);
			this->btnHighLow->TabIndex = 9;
			this->btnHighLow->Text = L"Show Highest/Lowest";
			this->btnHighLow->UseVisualStyleBackColor = true;
			this->btnHighLow->Click += gcnew System::EventHandler(this, &MyForm::btnHighLow_Click);
			// 
			// lblHighest0
			// 
			this->lblHighest0->AutoSize = true;
			this->lblHighest0->ForeColor = System::Drawing::SystemColors::ButtonHighlight;
			this->lblHighest0->Location = System::Drawing::Point(24, 138);
			this->lblHighest0->Name = L"lblHighest0";
			this->lblHighest0->Size = System::Drawing::Size(78, 13);
			this->lblHighest0->TabIndex = 10;
			this->lblHighest0->Text = L"Highest score: ";
			this->lblHighest0->Visible = false;
			// 
			// lblLowest0
			// 
			this->lblLowest0->AutoSize = true;
			this->lblLowest0->ForeColor = System::Drawing::SystemColors::ButtonHighlight;
			this->lblLowest0->Location = System::Drawing::Point(24, 162);
			this->lblLowest0->Name = L"lblLowest0";
			this->lblLowest0->Size = System::Drawing::Size(76, 13);
			this->lblLowest0->TabIndex = 11;
			this->lblLowest0->Text = L"Lowest score: ";
			this->lblLowest0->Visible = false;
			// 
			// lblHighest1
			// 
			this->lblHighest1->AutoSize = true;
			this->lblHighest1->ForeColor = System::Drawing::SystemColors::ControlLightLight;
			this->lblHighest1->Location = System::Drawing::Point(112, 138);
			this->lblHighest1->Name = L"lblHighest1";
			this->lblHighest1->Size = System::Drawing::Size(19, 13);
			this->lblHighest1->TabIndex = 12;
			this->lblHighest1->Text = L"35";
			this->lblHighest1->Visible = false;
			// 
			// lblLowest1
			// 
			this->lblLowest1->AutoSize = true;
			this->lblLowest1->ForeColor = System::Drawing::SystemColors::ControlLightLight;
			this->lblLowest1->Location = System::Drawing::Point(111, 162);
			this->lblLowest1->Name = L"lblLowest1";
			this->lblLowest1->Size = System::Drawing::Size(19, 13);
			this->lblLowest1->TabIndex = 13;
			this->lblLowest1->Text = L"35";
			this->lblLowest1->Visible = false;
			// 
			// MyForm
			// 
			this->AutoScaleDimensions = System::Drawing::SizeF(6, 13);
			this->AutoScaleMode = System::Windows::Forms::AutoScaleMode::Font;
			this->BackColor = System::Drawing::SystemColors::ActiveCaptionText;
			this->ClientSize = System::Drawing::Size(713, 308);
			this->Controls->Add(this->lblLowest1);
			this->Controls->Add(this->lblHighest1);
			this->Controls->Add(this->lblLowest0);
			this->Controls->Add(this->lblHighest0);
			this->Controls->Add(this->btnHighLow);
			this->Controls->Add(this->panel1);
			this->Controls->Add(this->txtMean);
			this->Controls->Add(this->btnGroup);
			this->Controls->Add(this->btnShow);
			this->Controls->Add(this->label5);
			this->Controls->Add(this->label4);
			this->Controls->Add(this->label3);
			this->Controls->Add(this->label2);
			this->Controls->Add(this->label1);
			this->Name = L"MyForm";
			this->Text = L"Seating Chart";
			this->Load += gcnew System::EventHandler(this, &MyForm::MyForm_Load);
			this->ResumeLayout(false);
			this->PerformLayout();

		}
#pragma endregion

		static const int NUMROWS = 4;
		static const int NUMCOLS = 5;
		Graphics^ graphics;
		Brush^ redBrush;
		Brush^ yellowBrush;
		Brush^ greenBrush;
		Pen^ blackPen;
		private: System::Void MyForm_Load(System::Object^  sender, System::EventArgs^  e) {
				graphics = panel1->CreateGraphics();
				redBrush = gcnew SolidBrush(Color::Red);
				yellowBrush = gcnew SolidBrush(Color::Yellow);
				greenBrush = gcnew SolidBrush(Color::Green);
				blackPen = gcnew Pen(Color::Black);
			}
		private: System::Void btnShow_Click(System::Object^  sender, System::EventArgs^  e) {
			panel1->Refresh();
			for (int row = 0; row < NUMROWS; row++)
			{
				for (int col = 0; col < NUMCOLS; col++)
				{
					Rectangle seat = Rectangle(75 + col * 75, 40 + row * 40, 25, 25);
					graphics->DrawRectangle(blackPen, seat);
				}
			}
		}
		private: double CalculateMean(double (&scores)[NUMROWS][NUMCOLS])
		{
			double sum;
			int students = NUMROWS * NUMCOLS;
			for (int row = 0; row < NUMROWS; row++)
			{
				for (int col = 0; col < NUMCOLS; col++)
				{
					sum += scores[row][col];
				}
			}
			return sum / students;
		}
		private: System::Void btnGroup_Click(System::Object^  sender, System::EventArgs^  e) {
			double score[NUMROWS][NUMCOLS] =
			{
					{ 45, 65, 11, 98, 66 },
					{ 56, 77, 78, 56, 56 },
					{ 87, 71, 78, 90, 78 },
					{ 76, 75, 72, 79, 83 } 
			};
				
			double mean = CalculateMean(score);
			txtMean->Text = mean.ToString();

			for (int row = 0; row < NUMROWS; row++)
			{
				for (int col = 0; col < NUMCOLS; col++)
				{
					Rectangle seat = Rectangle(75 + col * 75, 40 + (row * 40), 25, 25);
					if (score[row][col] >= 80)
						graphics->FillRectangle(greenBrush, seat);
					else if (score[row][col] >= mean)
						graphics->FillRectangle(yellowBrush, seat);
					else
						graphics->FillRectangle(redBrush, seat);
					graphics->DrawRectangle(blackPen, seat);
				}
			}
		}

		private: System::Void btnHighLow_Click(System::Object^  sender, System::EventArgs^  e) {
			double score[NUMROWS][NUMCOLS] =
			{
				{ 45, 65, 11, 98, 66 },
				{ 56, 77, 78, 56, 56 },
				{ 87, 71, 78, 90, 78 },
				{ 76, 75, 72, 79, 83 }
			};
			HighLow(score);
		}
		private: System::Void HighLow(double(&scores)[NUMROWS][NUMCOLS]){
			double Highest;
			double Lowest = 100;
			for (int row = 0; row < NUMROWS; row++)
			{
				for (int col = 0; col < NUMCOLS; col++)
				{
					if (scores[row][col] > Highest) Highest = scores[row][col];
					else if (scores[row][col] < Lowest) Lowest = scores[row][col];
				}
			}
			lblHighest0->Visible = true;
			lblHighest1->Visible = true;
			lblHighest1->Text = Highest.ToString();
			lblLowest0->Visible = true;
			lblLowest1->Visible = true;
			lblLowest1->Text = Lowest.ToString();
		}
};
}
