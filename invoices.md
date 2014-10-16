Invoice Fields
Invoices fields can be grouped as follows:

Header Fields
Additional Header Fields
Invoice Line fields
Payment Fields
Tax Fields
Header Fields

FIELD NAME	DESCRIPTION
id*	Unique Id that identifies the invoice within your account
invoice_no*	System assigned sequential number within the branch
reference	User assigned sequential number that identifies the invoice. If used, there should be no duplicate number. Letters and symbols are allowed.
invoice_date**	invoice date and time (write only)
customer_id	unique number that identifies the customer
customer_name	Name of the customer
remark	notes or remark
tax_inclusive	true or false. this affects the way tax for this invoice is computed. Default is false.
Note:

Fields mark with * are read only.
Fields returned may not be in above order.
When creating an invoice, all the fields above are optional.
* id and invoice_no are read only
** invoice_date is write only
Additional Header Fields

FIELD NAME	DESCRIPTION
amount*	total amount without tax
tax*	total tax amount of the invoice
amount_with_tax*	total amount with tax, if tax inclusive if set to true, the amount and amount_with_tax should have the same value
discount_text*	discount percent that is applicable to entire invoice. This is for information only. Might be phased in future version.
layaway_status*	Set to L if this invoice is a layaway
quantity*	total quantity (sum of all the quantity in the invoice)
utc_invoice_date*	invoice date / time in UTC format
utc_post_date*	date and time when the invoice is created or posted. During offline mode, the invoice date can be different from post date.
status*	"S" when invoice is posted. "V" when invoice is voided or cancelled.
voided_reason*	Remark indicating why the invoice is cancelled.
** All the fields in this table are read only.

Invoice Lines Fields

FIELD NAME	DESCRIPTION
product_id+	product ID
product_name*	product name
product_stock_no*	product stock no.
line_no++	optional sequential number that identifies the item in the invoice
retail_price++	selling price
discount_text++	discount either in percent or in value (e.g. 10%, 5)
price++	actual net unit price
quantity++	quantity (default is 1)
subtotal++	subtotal is net price x quantity
remark++	remark or notes
Note:

All the fields above will be returned in GET
+ Only product ID is required in CREATing an invoice
++ All other fields have default value
How does server computes the net unit price ("price")?

If no information is submitted, the server assume the net price is the same as the system's retail price.
If retail price is submitted, the server assume the net price to be as the given retail price.
If discount is given, the server computes the net price to be retail price less discount
If subtotal is given, net unit price is computed based subtotal divided by quantity
Payments Fields

Basic Payment fields:

FIELD NAME	
payment_type_id	1: cash, 2: credit card, 3: debit card, 4: gift certificate, 5: check, 6: others
payment_type_name*	Payment type name (e.g. Cash, Credit card, etc.)
amount	Amount of the payment, should match the total amount including tax
tender	Amount tendered by the customer, if not given it is the same as the amount. If tender amount is more than amount of the payment, the difference is the change.
Note: * payment_type_name is read only.

Credit card or debit card payment fields: if payment type is is credit card (2) or debit card (3), following additional fields can be submitted.

FIELD NAME	DESCRIPTION
card_first_name	First name of the card holder
card_last_name	Last name of the card holder
Last 4 digits of the card
card_type	Card type: following codes are used: VISA, MASTER, AMERICAN_EXPRESS, DISCOVER, DINNERS_CLUB, JCB, SWITCH, SOLO, DANKORT, MAESTRO, Forbrugsforeningen, LASER
street	max 256 characters
city	max 50 characters
state	max 50 characters
country	2 letter country code, please refer to country table
Check Field: if payment type is check (5), following field can be submitted.

FIELD NAME	DESCRIPTION
reference	Use to store the check number
Tax Fields

FIELD NAME	DESCRIPTION
tax_rate_id*	Tax rate id
name*	Name of the tax rate
rate	Actual Rate used
amount	Tax amount