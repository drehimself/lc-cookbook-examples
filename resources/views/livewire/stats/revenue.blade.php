<x-stat-layout name="Revenue" :stat="(new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($revenue / 100, 'USD')" />
