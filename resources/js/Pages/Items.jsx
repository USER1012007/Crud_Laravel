// resources/js/Pages/Items.jsx
import React from 'react';

export default function Items({ items }) {
  return (
    <div>
      <h1>Items List</h1>
      <ul>
        {items.map(item => (
          <li key={item.id}>{item.name}</li>
        ))}
      </ul>
    </div>
  );
}
